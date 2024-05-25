<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\Ads;
use App\Models\Post;
use DB;




class UserProfileController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }



    public function profile() {
        if (Auth::check()){
        $userId = Auth::user()->id;
      }

      $freindRequestList = DB::table('friends as fnds')
               ->leftJoin('users as u', 'fnds.user_id', '=', 'u.id')
               ->select('fnds.*', 'u.name as name', 'u.lastName as lastName', 'u.bio as bio', 'u.profileImage as profileImage')
               ->where('fnds.friend_id', '=', $userId)
               ->where('fnds.status', '=', 0)
               ->orderByRaw('(fnds.created_at)desc')
               ->get();

       $conversationSender = DB::table('conversations as con')
             ->leftJoin('users as u', 'con.user2_id', '=', 'u.id')
             ->select('con.*', 'u.name as name', 'u.lastName as lastName', 'u.profileImage as profileImage')
             ->where('user1_id', $userId)
             ->get();

       $conversationReciever = DB::table('conversations as con')
             ->leftJoin('users as u', 'con.user1_id', '=', 'u.id')
             ->select('con.*', 'u.name as name', 'u.lastName as lastName', 'u.profileImage as profileImage')
             ->where('user2_id', $userId)
             ->get();


    $posts = Post::with('user')
         ->where('user_id', $userId)
         ->orderByDesc('created_at')
         ->get();

    $advertisements = Ads::with('user')
         ->where('user_id', $userId)
         ->orderByDesc('created_at')
         ->get();

    	return view('profile.profile',
      ['freindRequestList'=> $freindRequestList,
      'conversationSender'=> $conversationSender,
      'conversationReciever'=> $conversationReciever,
      'advertisements'=> $advertisements,
      'posts' => $posts]
      );
    }


    public function updateUserInfo(Request $req)
      {
          $data = [
              'name' => $req->name,
              'lastName' => $req->lastName,
              'bio' => $req->bio,
              'phone' => $req->phone,
              'country' => $req->country,
              'city' => $req->city,
              'dob' => $req->dob,
              'job' => $req->job,
              'degree' => $req->degree,
              'field_of_study' => $req->field_of_study,
              'height' => $req->height,
              'weight' => $req->weight,
              'gender' => $req->gender,
              'sexual_desire' => $req->sexual_desire,
              'marital_status' => $req->marital_status,
              'my_plan' => $req->my_plan,
          ];

          try {
              DB::table('users')
                  ->where('id', Auth::user()->id)
                  ->update($data);

              return back()->with('success', 'عملیات موفقانه اجرا شد.');
          } catch (Exception $e) {
              return back()->with('failed', 'خطا رخ داده لطفا دوباره کوشش کنید');
          }
      }



    public function updateUserImage(Request $req) {
        $this->validate($req, [
            'image' => '|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
        ]);
    	if($image = $req->file('image')){
	    	$new_name =rand() . '.' . $image-> getClientOriginalExtension();
	    	$image -> move("UploadedImages/users/", $new_name);
	    }
	    try {
    		$old_image_name = DB::table('users')->select('profileImage')->where('id', Auth::user()->id)->get();
      		DB::update('update users set profileImage = ? where id = ?',[$new_name, Auth::user()->id]);
	    	$image_path = "/UploadedImages/".$old_image_name;
			if(File::exists($image_path)) {
			    File::delete($image_path);
			}
	    	return back()->with('success', 'عکس تان تبدیل شد.');
	    } catch (Exception $e) {
	    	return back()->whit('failed', 'خطا رخ داده لطفا دوباره کوشش کنید');
	    }
	    return redirect('back');
    }

    public function updateUserPass(Request $req) {
    	if (!(Hash::check($req->get('current-password'), Auth::user()->password))) {
        	return redirect()->back()->with("failed","پسورد قدیمی تان را اشتباه وارد کردید");
    	}

        if(strcmp($req->get('current-password'), $req->get('new-password')) == 0){
            return redirect()->back()->with("failed","پسورد قبلی و فعلی تان یکسان میباشد لطفا دوباره سعی کنید.");
        }

       	$this->validate($req, [
			'current-password' => 'required',
            'new-password' => 'required|string|min:6',
            'confirm_password' => 'required|same:new-password',
       	],[
			'current-password.required' => 'فیلد پسورد قدیمی را نباید خالی بگذارید.',
            'new-password.required' 	=> 'فیلد پسورد جدید نباید خالی باشد.',
            'new-password.string' 		=> 'از string استفاده کنید',
            'new-password.min' 		=> 'پسورد تان نباید از شش حرف کمتر باشد.',
            'confirm_password.same' 	=> 'پسورد جدید با تکرار پسورد مطابقت ندارد.',
            'confirm_password.required' 	=> 'فیلد تکرار پسورد الزامی است/',
       	]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($req->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","پسورد تان موفقانه تغییر کرد. !");
    }
}
