<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Friend;
use DB;

class FriendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendRequest(Request $request)
    {
          $this->validate(request(),[
            'friend_id'=>'required',
        ]);

          Friend::create([
              'user_id' => Auth::user()->id,
              'friend_id' => request('friend_id'),
              'created_at'=>carbon::now(),
              'updated_at'=>carbon::now(),

            ]);
            try {
             session()->flash('success', 'Operation Successfully Done.');
             return back();
             } catch(Exception $ex) {
             session()->flash('failed', 'Please Try Again Later.');
             return back();
           }
    }



      public function acceptRequest(Request $request, $id ) {
      	$status = 1;
  	    try {
  	    	DB::update('update friends set status = ? where id = ?',[$status, $id]);
  	    	return back()->with('success', 'عملیات موفقانه اجرا شد.');
  	    } catch (Exception $e) {
  	    	return back()->whit('failed', 'خطا رخ داده لطفا دوباره کوشش کنید');
  	    }
  	    return redirect('back')->with();
      }


      public function favorite(Request $request, $id)
        {
            $favorite = 1;
            try {
                DB::table('friends')->where('id', $id)->update(['favorite' => $favorite]);
                return back()->with('success', 'عملیات موفقانه اجرا شد.');
            } catch (Exception $e) {
                return back()->with('failed', 'خطا رخ داده، لطفاً دوباره کوشش کنید');
            }
        }


      /**
       * Remove the specified resource from storage.
       *
       * @param  \app\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function destroy($id) {
       DB::delete('delete from posts where id = ?',[$id]);

       try {
        session()->flash('success', 'Operation Successfully Done.');
        return back();
        } catch(Exception $ex) {
        session()->flash('failed', 'Please Try Again Later.');
        return back();
      }
    }
}
