<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
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
        </style>
    </head>
    <body>
     <a style="color:white; align:center;" href="/">Back to home<a>
        <div class="container">
            <div class="content">
                <div class="title">Welcome, {{$user}} <span class="blink">|</span></div>
                <h1>Answered questions:</h1>
                @foreach($questions as $q)
                    <li>{{$q}}<li>
                @endforeach
                <h1>
            </div>
        </div>
    </body>
</html>
