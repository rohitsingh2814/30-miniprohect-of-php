<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap-year-checker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            
  font-family: "Roboto Mono", serif;
  font-optical-sizing: auto;

        }
        section{
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            height: 100vh; 
            background-image: url('https://i0.wp.com/boingboing.net/wp-content/uploads/2018/05/cool-background1.png?fit=1192%2C600&ssl=1');
           background-repeat: no-repeat;
           background-size: 100% 100%;
            
        }
        div{
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            height: 70vh;
            width: 90vh;
            background-image: linear-gradient(to right top,rgba(5, 0, 52, 0.11),rgba(174, 196, 0, 0.43));
            text-align: center;
            margin-top: 30px;
            border-radius: 30px;

        }
        label{
            font-size: 30px;

        }
        input{
            outline: none;
            font-size:30px;
            margin-top: 10px;
            background-color: blanchedalmond;
            border-radius: 10px;
        }
        input:hover{
            border:2px red solid;
        }
        button{
            font-size: 30px;
            padding:5px;
            margin-top: 10px;
            background-color: greenyellow;
            border-radius: 20px;
            border: none;
        }
        div:hover{
            border:5px yellow solid;
        }
        .header{
            font-size: 30px;
            color:#454c75;
        }
        button:hover{
            background-color: #454c75;
        }

    </style>
</head>
<body>
<section>
<h1 class="header">Enter a Year to check It Is Leap✔️ OR Not❌</h1>
    <div>    
<form action="" method="POST">
<label>Enter a year To Check:</label><br>
<input type="number" name="year" required><br>
<button name="submit">Check✔️</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])){
        $year=$_POST["year"];
        if($year>0&&strlen(strval($year))==4){
                  if(($year%4==0&&$year%100!=0)||$year%400==0){
                    echo "<h1>$year is the Leap year 😊😁</h1>";
                  }
                  else{
                    echo "<h1>$year is the not Leap year😔</h1>";
                  }
        }
        else{
           echo "<h1>Please Enter Valid Year🙏</h1>";
        }
    }
}
?>
</div>
</section>
</body>
</html>