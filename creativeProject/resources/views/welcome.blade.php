@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @if(Auth::check())
                    
                        <div class="title">Welcome {{$user->name}} </div>
                        <h3>Your Score: {{$user->score}}</h3>
                        <h3>User Status: {{$status}}</h3>
                        <h3>Answered questions:</h3>
                        @foreach($contentQuestions as $q)
                            <p>{{$q->content}}<p>
                        @endforeach
                    @endif
                    @if(Auth::guest())
                        <div class="title">Welcome!</div>
                        <h3>Please Login or Register to use the site.</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
