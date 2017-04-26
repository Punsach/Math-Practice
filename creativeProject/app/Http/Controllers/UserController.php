<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Auth;
use Hash;

class UserController extends Controller
{
	//PUT THESE LINES IN ROUTES/////
	//Route::get('profile', 'UserController@show');
	//Route::get('leaderboard', 'UserController@leaderboard');
	public function show()
    {
    	$user = Auth::user();
        return view('profile', compact('user'));
    }

    public function updateScore($newScore, $id)
    {
        $user = Auth::user();
        $score = $user->score;
        $insertScore = $score + $newScore;

        DB::table('users')
        ->where('id', $user->id)
        ->update(['score' => $insertScore]);

        $username = $user->name;

        DB::table('question_user')->insert(
            ['name' => $username, 'id' => $id]
            );
        return view('correct', compact('user'));
    }
    public function profile()
    {
        if(Auth::guest())
        {
            return view('welcome');
        }
        else
        {
            $user = Auth::user(); 
            $score = $user->score; 
            if($score < 10)
            {
                $status = "Beginner";
            }
            else if($score < 20)
            {
                $status = "Intermediate";
            }
            else
            {
                $status = "Master";
            }

            $answeredQuestions = DB::table('question_user')->where('name', '=', $user->name)->get();
            $contentQuestions = array();
            foreach($answeredQuestions as $q)
            {
                $content = DB::table('questions')->where('id', '=', $q->id)->first();
                array_push($contentQuestions, $content);

            }
            return view('welcome', compact('user', 'contentQuestions', 'status'));
        }
        
    }

    public function leaderboard(User $user)
    {
    	$users = Users::all();
    	return view('leaderboard', compact('users', 'user'));
    }
}
