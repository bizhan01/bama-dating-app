<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Post;
use DB;

class PostController extends Controller
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
         $posts = Post::with('user')
             ->orderBy('created_at', 'desc')
             ->get();
         return view('post.posts', compact('posts'));
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
          'post_description'=>'required',
          'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
      ]);
      if($image = $request->file('post_img')){
        $new_name =rand() . '.' . $image-> getClientOriginalExtension();
        $image -> move("UploadedImages/posts", $new_name);
      }
      else {
        $new_name = 'noDoc.png';
      };

        Post::create([
            'user_id' => Auth::user()->id,
            'post_description' => request('post_description'),
            'post_img' => $new_name,
            'created_at'=>carbon::now(),
            'updated_at'=>carbon::now(),

          ]);

          try {
           session()->flash('success', 'دلنوشته موفقانه ثبت شد');
           return back();
           } catch(Exception $ex) {
           session()->flash('failed', 'عملیات موفقانه انجام نشد');
           return back();
          }
  }



    public function edit(Request $request, $id) {
       $post_description = $request->input('post_description');

       if($image = $request->file('post_img')){
         $new_name =rand() . '.' . $image-> getClientOriginalExtension();
         $image -> move("UploadedImages/posts", $new_name);
       }
       else {
         $new_name = $request->input('post_img');
       };

       DB::update('update  posts set post_description = ? where id = ?',[$post_description, $id]);
       DB::update('update  posts set post_img = ? where id = ?',[$new_name, $id]);

       try {
        session()->flash('success', 'دلنوشته موفقانه ثبت شد');
        return back();
        } catch(Exception $ex) {
        session()->flash('failed', 'عملیات موفقانه انجام نشد');
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
         $post = DB::table('posts')->where('id', $id)->first();

         if (!$post) {
             // Record not found, handle the error
             return redirect()->back()->with('failed', 'دلنوشته موجود نیست');
         }

         $file = $post->post_img;
         $filename = public_path('UploadedImages/posts/' . $file);

         if (file_exists($filename)) {
             unlink($filename);
         }

         DB::table('posts')->where('id', $id)->delete();

         return redirect()->back()->with('success', 'دلنوشته موفقانه حذف شد');
      }
}
