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
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class QuestionController extends Controller
{
	//PUT THIS LINE IN ROUTES/////
	//Route::get('question/{id}', 'QuestionsController@showQuestion');
	public function showQuestion()
    {
    	$user = Auth::user();
    	$answeredQuestions = DB::table('question_user')->where('name', '=', $user->name)->get();
    	$id = rand(1,15);
    	$temp = true;

    	$go = true;

    	while($temp){
    		 	foreach($answeredQuestions as $q){
    		 		if ($q->id==$id){
    		 			$go=false;
    		 		}
    		 	}
    		 	if($go==false){
    		 		$id=rand(1,15);
    		 		$go=true;
    		 	}
    		 	else{
    		 		$temp=false;
    		 	}
    	}
    	
    	$question = DB::table('questions')->where('id', '=', [$id])->first();
    	//$question = DB::select('select * from questions where id = ?', [1]);
        return view('question', compact('question'));
    }
    public function filterQuestion($level)
    {
    	$user = Auth::user();
    	$answeredQuestions = DB::table('question_user')->where('name', '=', $user->name)->get();
    	if($level == 1)
    	{
    		$min = 1;
    		$max = 5;
    	}
    	else if($level == 2)
    	{
    		$min = 6;
    		$max = 10;
    	}
    	else
    	{
    		$min = 11;
    		$max = 15; 
    	}
    	$id = rand($min,$max);
    	$temp = true;

    	$go = true;

    	while($temp){
    		 	foreach($answeredQuestions as $q){
    		 		if ($q->id==$id){
    		 			$go=false;
    		 		}
    		 	}
    		 	if($go==false){
    		 		$id=rand($min,$max);
    		 		$go=true;
    		 	}
    		 	else{
    		 		$temp=false;
    		 	}
    	}
    	
    	$question = DB::table('questions')->where('id', '=', [$id])->first();
    	//$question = DB::select('select * from questions where id = ?', [1]);
        return view('question', compact('question'));
    }

    public function processInput($id, $level, $realAnswer)
    {
    	$answer = Input::get('answer');
    	if($answer === $realAnswer)
    	{
    		return Redirect::to('correct/'.$level."/".$id);
    	}
    	else
    	{
    		return Redirect::to('question');
    	}
    }

}
?>
