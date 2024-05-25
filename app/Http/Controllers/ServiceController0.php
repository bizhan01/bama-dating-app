<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Service;
use DB;

class ServiceController extends Controller
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
  public function index(){
      $services = Service::latest()->get();
      return view('service.services', compact('services'));
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
          'service_title'=>'required|unique:services',
          'service_description'=>'required',
          'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
      ]);

      if($image = $request->file('service_img')){
        $new_name =rand() . '.' . $image-> getClientOriginalExtension();
        $image -> move("UploadedImages/services", $new_name);
      }
      else {
          $new_name = 'noDoc.png';
      };

        Service::create([
            'service_title' => request('service_title'),
            'service_description' => request('service_description'),
            'service_img' => $new_name,
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



    public function edit(Request $request, $id) {
       $service_title = $request->input('service_title');
       $service_description = $request->input('service_description');

       if($image = $request->file('service_img')){
         $new_name =rand() . '.' . $image-> getClientOriginalExtension();
         $image -> move("UploadedImages/services", $new_name);
       }
       else {
         $new_name = $request->input('service_img');
       };

       DB::update('update services set service_title = ? where id = ?',[$service_title, $id]);
       DB::update('update services set service_description = ? where id = ?',[$service_description, $id]);
       DB::update('update services set service_img = ? where id = ?',[$new_name, $id]);
       return redirect('/services');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \app\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from services where id = ?',[$id]);

     try {
      session()->flash('success', 'Operation Successfully Done.');
      return back();
      } catch(Exception $ex) {
      session()->flash('failed', 'Please Try Again Later.');
      return back();
    }
  }
}
