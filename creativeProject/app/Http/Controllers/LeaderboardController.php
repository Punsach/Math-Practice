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

class LeaderboardController extends Controller
{
	public function showLeaderboard()
	{
		$user = Auth::user();
		$leaders = DB::table('users')
                ->orderBy('score', 'desc')
                ->get();
        return view('leaderboard', compact('leaders', 'user'));
	}
}