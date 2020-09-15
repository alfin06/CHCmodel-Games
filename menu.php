<?php
	include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Games | Menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <style>
      html, body {
      min-height: 100%;
      background: rgb(89,242,150);
background: radial-gradient(circle, rgba(89,242,150,1) 0%, rgba(5,151,181,1) 100%);
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: 'Grandstander', cursive;
      font-size: 20px;
      color: #eee;
      }
    </style>

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="menu.php" class="w3-bar-item w3-button"><b>Games</b></a>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1250px; min-height:300px;" id="home">
 <!--  <img class="w3-image" src="images/background.jpg" alt="Architecture" width="1500" height="800"> -->
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Welcome, <?php echo $name; ?>!</b></span> 
	<br/>
	<span class="w3-hide-small w3-text-light-grey">Select a game below to start!</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Fluid Reasoning (GF)</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
		<?php
		// Check if the game is available
		$qry ="SELECT game1_screenshot
				FROM account
			   WHERE id =".$login_session;
			   
		$result = $db->query($qry);// or die(mysql_error());
		
		while($r = mysqli_fetch_array($result))
		{
			$isavailable  = $r['game1_screenshot'] != "" ? "N" : "Y";
		}
		
		if ($isavailable == "N")
		{
		?>
			<button onclick="window.location.href='game1.php';" class="w3-display-topleft w3-black w3-padding" disabled>Rush Hour</button>
		<?php
		}
		else
		{
		?>
			<button onclick="window.location.href='rushhour.php';" class="w3-display-topleft w3-black w3-padding">Rush Hour</button>
		<?php
		}
		?>
        <img src="/w3images/house5.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>
  
  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Memory (GWM)</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <img src="/w3images/house5.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>
  
  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Speed (GS)</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <img src="/w3images/house5.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Thank you for your participation!</h3>
  </div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
</footer>

</body>
</html>
