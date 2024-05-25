<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Ads;
use DB;

class AdsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
     {
         $advertisements = Ads::with('user')
             ->orderBy('created_at', 'desc')
             ->get();

         return view('ads.ads', compact('advertisements'));
     }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
        $this->validate(request(),[
          'ads_title'=>'required',
          'ads_description'=>'required',
          'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
      ]);

      if($image = $request->file('ads_img')){
        $new_name =rand() . '.' . $image-> getClientOriginalExtension();
        $image -> move("UploadedImages/ads", $new_name);
      }
      else {
          $new_name = 'noDoc.png';
      };

        Ads::create([
            'user_id' => Auth::user()->id,
            'ads_title' => request('ads_title'),
            'ads_description' => request('ads_description'),
            'ads_img' => $new_name,
            'created_at'=>carbon::now(),
            'updated_at'=>carbon::now(),

          ]);

          try {
           session()->flash('success', 'آگاهی موفقانه ثبت شد');
           return back();
           } catch(Exception $ex) {
           session()->flash('failed', 'آگاهی ثبت نشد');
           return back();
          }
  }



    public function edit(Request $request, $id) {
       $ads_title = $request->input('ads_title');
       $ads_description = $request->input('ads_description');

       if($image = $request->file('ads_img')){
         $new_name =rand() . '.' . $image-> getClientOriginalExtension();
         $image -> move("UploadedImages/ads", $new_name);
       }
       else {
         $new_name = $request->input('ads_img');
       };

       DB::update('update ads set ads_title = ? where id = ?',[$ads_title, $id]);
       DB::update('update ads set ads_description = ? where id = ?',[$ads_description, $id]);
       DB::update('update ads set ads_img = ? where id = ?',[$new_name, $id]);
       try {
        session()->flash('success', 'آگاهی موفقانه ویرایش شد');
        return back();
        } catch(Exception $ex) {
        session()->flash('failed', 'آگاهی ویرایش نشد');
        return back();
       }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \app\Task  $task
     * @return \Illuminate\Http\Response
     */

     public function destroy($id)
   {
       $ad = DB::table('ads')->where('id', $id)->first();

       if (!$ad) {
           // Record not found, handle the error
           return redirect()->back()->with('error', 'آگاهی موجود نیست');
       }

       $file = $ad->ads_img;
       $filename = public_path('UploadedImages/ads/' . $file);

       if (file_exists($filename)) {
           unlink($filename);
       }

       DB::table('ads')->where('id', $id)->delete();

       return redirect()->back()->with('success', 'آگاهی موفقانه حذف شد');
   }


}
