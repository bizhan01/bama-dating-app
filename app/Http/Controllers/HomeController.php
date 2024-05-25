<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Ads;
use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use App\Models\Conversation;
use DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $userId = Auth::id();

      $conversationSender = DB::table('conversations as con')
            ->leftJoin('users as u', 'con.user2_id', '=', 'u.id')
            ->select('con.*', 'u.name as name', 'u.lastName as lastName', 'u.profileImage as profileImage')
            ->where('user1_id', $userId)
            ->orderByRaw('(con.created_at)desc')
            ->get();

      $conversationReciever = DB::table('conversations as con')
            ->leftJoin('users as u', 'con.user1_id', '=', 'u.id')
            ->select('con.*', 'u.name as name', 'u.lastName as lastName', 'u.profileImage as profileImage')
            ->where('user2_id', $userId)
            ->orderByRaw('(con.created_at)desc')
            ->get();




    $messages = DB::table('messages as msg')
             ->leftJoin('conversations as con', 'msg.conversation_id', '=', 'con.id')
             ->select('msg.*', 'con.id as name',)
             ->orderByRaw('(msg.created_at)asc')
             ->get();



      $freindRequestList = DB::table('friends as fnds')
             ->leftJoin('users as u', 'fnds.user_id', '=', 'u.id')
             ->select('fnds.*', 'u.name as name', 'u.lastName as lastName', 'u.bio as bio', 'u.profileImage as profileImage')
             ->where('fnds.friend_id', '=', $userId)
             ->where('fnds.status', '=', 0)
             ->orderByRaw('(fnds.created_at)desc')
             ->get();


      $myFreindsList = DB::table('friends as fnds')
              ->leftJoin('users as u1', 'fnds.friend_id', '=', 'u1.id')
              ->leftJoin('users as u2', 'fnds.user_id', '=', 'u2.id')
              ->select('u1.*', 'u2.*', 'fnds.id as user_id', 'fnds.favorite as favorite')
              ->where(function ($query) use ($userId) {
                  $query->where('fnds.user_id', '=', $userId)
                      ->orWhere('fnds.friend_id', '=', $userId);
              })
              ->where('fnds.status', '=', 1)
              ->orderBy('u1.name')
              ->get();

      $myFavoriteFreindsList = DB::table('friends as fnds')
               ->leftJoin('users as u', 'fnds.friend_id', '=', 'u.id')
               ->select('u.*', 'fnds.id')
               ->where('fnds.user_id', '=', $userId)
               ->where('fnds.status', '=', 1)
               ->where('fnds.favorite', '=', 1)
               ->orderByRaw('(fnds.created_at)desc')
               ->get();

      $advertisements = DB::table('ads as ads')
               ->leftJoin('users as u', 'ads.user_id', '=', 'u.id')
               ->select('ads.*', 'u.name as name', 'u.lastName as lastName', 'u.bio as bio', 'u.profileImage as profileImage')
               ->orderByRaw('(ads.created_at)desc')
               ->get();



      $usersList = DB::table('users')
              ->orderBy('id', 'desc')
              ->where('userType', 2)
              ->where('id',  '!=', $userId)
              ->limit(8)
              ->get();


     $users = DB::table('users')
            ->leftJoin('friends', function ($join) use ($userId) {
                  $join->on('users.id', '=', 'friends.friend_id')
                    ->where('friends.user_id', '=', $userId);
            })
            ->whereNull('friends.friend_id') // Only select rows where friends.friend_id is null
            ->select('users.*')
            ->where('users.userType', 2)
            ->where('users.id',  '!=', $userId)
            ->limit(30)
            ->get();


      $posts = DB::table('posts as p')
               ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
               ->select('p.*', 'u.name as name', 'u.lastName as lastName', 'u.bio as bio', 'u.profileImage as profileImage')
               ->orderByRaw('(p.created_at)desc')
               ->get();


    return view('home', compact(
    'advertisements',
    'posts',
    'usersList',
    'users',
    'freindRequestList',
    'myFreindsList',
    'myFavoriteFreindsList',
    'conversationSender',
    'conversationReciever',
    'messages',
    ));
    }


}


// <!--
// ***********************************************************
// * ******************************************************* *
// * * Author: Rahmatullah Bizhan                          * *
// * * Email: rahmatullahbizhan@gmail.com                  * *
// * * Please Kindly Report any error or bug you may face. * *
// * * Contact me if you have any questions :)             * *
// * ******************************************************* *
// ***********************************************************
// -->
