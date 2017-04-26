
@extends('layouts.app')
@section('title')
<title>Question</title>
@stop
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Question</div>
        <div class="panel-body">
        <h3>Level: {{$question->level}}</h3>
          <h3>{{$question->content}}</h3>
          

          <form  class = "form-horizontal" method="POST" action="/correct/{{$question->id}}/{{$question->level}}/{{$question->answer}}">
            <input id="answer" type="integer" class="form-control" name="answer"> <br>
            <button type="submit" class="btn btn-primary">Final Answer</button>
          </form>

          <form  class = "form-horizontal" method="POST" action="/correct/{{$question->id}}/{{$question->level}}/{{$question->answer}}">
            
            <a href="/filteredQuestion/1"; style="color:white; background-color:green; padding:3px" >Level 1</a>
             <a href="/filteredQuestion/2"; style="color:white; background-color:gold;padding:3px " >Level 2</a>
              <a href="/filteredQuestion/3"; style="color:white; background-color:red; padding:3px; " >Level 3</a>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@stop
