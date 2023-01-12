<?php 
session_start();

	include("connection.php");
	include("functions.php");
	// include("game.html");
	// include("highscore.html");
	// include("end.html");

	$user_data = check_login($con);
	echo "<script>
	function myFunction() 
	{
	setTimeout(function(){ location.href='game.html'; }, 5000);
	}
	myFunction();
		</script>";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <title>Home page</title>
  </head>
  <body>
    <div class="container">
      <div id="home" class="flex-cloumn flex-center">
        <h1> Are you ready </h1>
        <a href="./game.html" class="btn">Play</a>
        <a href="./highscores.html" id="highscore-btn" class="btn">High Score
        <i class="fas fa-crown"></i></a>
        <a href="add_que.html"><button type="button" class="btn btn-outline-dark">Add Question</button></a>
      </div>

    </div>
  </body>
</html>
