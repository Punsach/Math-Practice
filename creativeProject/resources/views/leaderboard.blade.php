@extends('layouts.app')
    @section('title')
        <title>Correct!</title>
    @stop
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">




    
<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Leaderboard</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<style>
     html, body {
                height: 100%;
                background-color:black;
            }

            h1{
                text-align:center;
                color:#4CAF50;
                font-family:  'Digital SF','Lato';
                font-size:60px;
                text-shadow: -1px 0 #282828, 0 1px white, 1px 0 #282828, 0 -1px #282828;


            }
            p{
                font-size: 20px;
                color:#4CAF50;
                vertical-align:center;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family:  'Power Clear', 'Digital SF','Lato';
            }
            table{
                font-size:26px;
                margin-top:24px;
                margin-bottom:auto;
                margin-left:auto;
                margin-right:auto;
                /*border-width:2px;*/
                border: 5px outset white;
                border-style:outset;
                background-color:#282828;
                
               

            }
            
            tr {
                color:white;

            }
            .container {
                text-align: center;
                margin-top:40px;
                margin-bottom:auto;
                /*background-color:black;*/
                /*display: table-cell;*/
                
            }

            .content {
                text-align: center;

                display: inline-block;
            }

            .title {
                vertical-align:middle;
                font-size: 96px;
                font-family:  'Consolas', 'Digital SF','Lato';
                color:#4CAF50;
            }
            .link_button{
                font-color: #4CAF50;
                margin-left:6px;
                margin-right:6px;
                padding-left:6px;
                padding-right:6px;
                border: 2px solid white;
                text-decoration:none;
                color: inherit;

            }
            .bottom_bar{
                text-align:center;
                /*position:absolute;*/
                bottom:20px;
            }
            @keyframes blink {  
              0% { color: white; }
              100% { color: black; }
          }
          @-webkit-keyframes blink {
              0% { color: white; }
              100% { color: black; }
          }
          .blink {
            /*font-family: 'Cambria';*/
              -webkit-animation: blink 1s linear infinite;
              -moz-animation: blink 1s linear infinite;
              animation: blink 1s linear infinite;
          } 
          .white_text{
            color:white;
          }
        </style>
    </head>
    <body>
     <a style="color:white; align:center;" href="/">Back to home<a> -->
    
 @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Leaderboard</div>
                <div class="panel-body">
                     <table class = class="table table-striped table-med-width text-left">

                @foreach ($leaders as $key=>$leader)
                    @if($key==0)
                        <tr style="color:#4CAF50; font-weight:bold; text-shadow: 1px black">
                            <th>Top Player: </th>
                            <th> {{$leader->name}}</th>
                        <tr>
                    
                    @elseif ($key < 10)
                        @if ($user->name==$leader->name)
                        <tr>
                           
                            <th>Rank {{$key+1}}:</th>
                            
                            <th style="color:#4CAF50; ">You</th>
                            @else 
                            <tr>
                            <th>Rank {{$key+1}}:</th>
                            <th>{{$leader->name}}</th>
                            @endif
                        </tr>
                    @else
                        
                        @if ($user->name==$leader->name)
                            <p>Your Rank: {{$key+1}}</p>
                        @endif
                    @endif

                @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
 @stop      

    </body>
</html>
