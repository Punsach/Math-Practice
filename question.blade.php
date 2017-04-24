<!DOCTYPE html>
<html>
    <head>
        <title>Question</title>

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
                font-size:20px;
                margin-top:auto;
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
          input{
			border-color:#4CAF50;
			background-color: #282828;
			color: #4CAF50;	
		}
		input[type=submit]{
			background-color: black;
			font-color: #4CAF50;
			font-family:'Power Clear','Consolas';
			margin-left:6px;
			margin-right:6px;
			padding-left:6px;
			padding-right:6px;
			border: 2px solid white;
			text-decoration:none;
			font-size:20px;
			
		}
		input::placeholder{
			font-family:'Consolas';
		}
        </style>
    </head>
    <body>
     <a style="color:white; align:center;" href="/">Back to home<a>
        <div class="container">
            <div class="content">
                <div class="title"><span class="white_text">question</span><span class="blink">|</span> </div>
               
                <p>[Question should appear here]<span class="blink" >|</span></p>
			<form >
				<input type="text" name="answer" placeholder="answer"><br><br>
				<input type="submit" value="Final Answer">
			</form>

                </p>
           
                
            </div>
        </div>
    </body>
</html>
