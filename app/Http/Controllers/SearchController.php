<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use App\Models\Advertisement;
use App\Models\Post;
use DB;

class SearchController extends Controller
{

    public function search(Request $request)
      {
        $keyword = $request->input('keyword');

        $results = DB::table('users')
            ->where('name', 'like', "%$keyword%")
            ->orWhere('lastName', 'like', "%$keyword%")
            ->get();


        $userId = Auth::id();

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

        return view('search.people_search_result', [
          'results' => $results,
          'freindRequestList'=> $freindRequestList,
          'conversationSender'=> $conversationSender,
          'conversationReciever'=> $conversationReciever,
        ]);
      }


    public function advanceSearch(Request $request)
      {
        $name = $request->input('name');
        $country = $request->input('country');
        $city = $request->input('city');
        $ageStart = $request->input('age_start');
        $ageEnd = $request->input('age_end');
        $gender = $request->input('gender');
        $sexualDesire = $request->input('sexual_desire');
        $maritalStatus = $request->input('marital_status');
        $plan = $request->input('plan');
        $degree = $request->input('degree');
        $heightStart = $request->input('height_start');
        $heightEnd = $request->input('height_end');
        $weightStart = $request->input('weight_start');
        $weightEnd = $request->input('weight_end');

        $query = User::query();

        if ($name) {
            $query->where('name', 'like', "%$name%");
        }

        if ($country) {
            $query->orwhere('country', $country);
        }

        if ($city) {
            $query->orwhere('city', $city);
        }

        if ($ageStart && $ageEnd) {
            $query->orwhereBetween('dob', [$ageStart, $ageEnd]);
        }

        if ($gender) {
            $query->orwhere('gender', $gender);
        }

        if ($sexualDesire) {
            $query->orwhere('sexual_desire', $sexualDesire);
        }

        if ($maritalStatus) {
            $query->orwhere('marital_status', $maritalStatus);
        }

        if ($plan) {
            $query->orwhere('my_plan', $plan);
        }

        if ($degree) {
            $query->orwhere('degree', $degree);
        }

        if ($heightStart && $heightEnd) {
            $query->orwhereBetween('height', [$heightStart, $heightEnd]);
        }

        if ($weightStart && $weightEnd) {
            $query->orwhereBetween('weight', [$weightStart, $weightEnd]);
        }

        $results = $query->get();

        $userId = Auth::id();

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

        return view('search.people_search_result', [
          'results' => $results,
          'freindRequestList'=> $freindRequestList,
          'conversationSender'=> $conversationSender,
          'conversationReciever'=> $conversationReciever,
        ]);
      }


    public function search_posts(Request $request)
      {
        $keyword = $request->input('keyword');

        $post_results = DB::table('posts as pst')
                 ->leftJoin('users as u', 'pst.user_id', '=', 'u.id')
                 ->select('pst.*', 'u.name as name', 'u.lastName as lastName', 'u.bio as bio', 'u.profileImage as profileImage')
                 ->where('pst.post_description', 'like', "%$keyword%")
                 ->get();

          $userId = Auth::id();


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

        return view('search.posts_search_result', [
          'post_results' => $post_results,
          'freindRequestList'=> $freindRequestList,
          'conversationSender'=> $conversationSender,
          'conversationReciever'=> $conversationReciever,
        ]);
      }


    public function search_ads(Request $request)
      {
        $keyword = $request->input('keyword');

        $ads_results = DB::table('ads as ads')
                 ->leftJoin('users as u', 'ads.user_id', '=', 'u.id')
                 ->select('ads.*', 'u.name as name', 'u.lastName as lastName', 'u.bio as bio', 'u.profileImage as profileImage')
                 ->where('ads.ads_title', 'like', "%$keyword%")
                 ->orwhere('ads.ads_description', 'like', "%$keyword%")
                 ->get();

          $userId = Auth::id();

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

        return view('search.ads_search_result', [
          'ads_results' => $ads_results,
          'freindRequestList'=> $freindRequestList,
          'conversationSender'=> $conversationSender,
          'conversationReciever'=> $conversationReciever,
        ]);
      }


}
