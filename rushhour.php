<?php
  include("session.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rush Hour</title>
    <link rel="stylesheet" type="text/css" href="./css/rush_hour.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Skranji:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/dc492cc8b0.js"></script>
    <script src="./js/rushhourbundle.js"></script>

  </head>

  <body>
    <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="menu.php" class="w3-bar-item w3-button"><b>Menu</b></a>
  </div>
</div>

    <div class="main-container">
      <div class="instructions-container">
        <h1 class="title">Rush Hour</h1>
        <h1 class="instructions">Get the red ferrari to the exit!</h1>
        <h1 class="instructions">Click to select car; use your keyboard ▲ ▼ ◀ ▶ to move</h1>
        <h1 class="instructions-note">Note that cars can only move backwards or forwards in their orientation</h1>
      </div>
      <div class="game-container">
        <div class="controls">
         <!--  <button class="reset-button">Reset</button> -->
          <div class="exit">Exit</div>
        </div>
        <div id="rush-hour"></div>
        <div class="win-phrase">
          Great job,  <?php echo $name; ?>!<br />
         <a href="menu.php"> <button class="btn_back">Back to Menu</button></a>

        </div>
      </div>
      <div class="levels-container">
        <div class="levels">
          <button class="easy-button">Easy</button>
          <button class="medium-button">Medium</button>
          <button class="hard-button">Hard</button>
        </div>
      </div>

    </div>




  </body>
</html>
