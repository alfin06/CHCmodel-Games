<?php
	include("config.php");
	session_start();
	
	if (!isset($_SESSION['student_id']))
	{
		header("location:result.php");
	}
?>

<!DOCTYPE html>
<html>
<title>Games | Result</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/x-icon" href="images/logo4.jpg" />

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>
	html, body {
      min-height: 100%;
      background-image: url("images/bg1.png");
      background-color: #cccccc;
    }
	
    body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: 'Grandstander', cursive;
      font-size: 20px;
      color: black;
    }
	
	button {
		cursor: pointer; 
	 }
	 .dv_tableresult{
	 	background-color: #ff5f5f;
  border-radius: 25px;
  border:10px solid #ffd065;
	 }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
	<a href="result.php" class="w3-bar-item w3-button"><i class="fas fa-arrow-left"></i></a>
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Result</h3>
  </div>

  <form method="POST">
  <div class="w3-row-padding">
    <div class="w3-col m12 w3-margin-bottom">
      <div class="w3-display-container">
		<?php
		// Show data
		$qry ="SELECT id, name, gender, age, DATE_FORMAT(signup_date, '%d/%m/%Y at %H:%i') AS signup_date,
					  DATE_FORMAT(game1_start, '%d/%m/%Y at %H:%i') AS game1_start, game1_screenshot,
					  DATE_FORMAT(game1_end, '%d/%m/%Y at %H:%i') AS game1_end,
					  DATE_FORMAT(game2_start, '%d/%m/%Y at %H:%i') AS game2_start, game2_screenshot,
					  DATE_FORMAT(game2_end, '%d/%m/%Y at %H:%i') AS game2_end,
					  DATE_FORMAT(game3_start, '%d/%m/%Y at %H:%i') AS game3_start, game3_screenshot,
					  DATE_FORMAT(game3_end, '%d/%m/%Y at %H:%i') AS game3_end,
					  DATE_FORMAT(game4_start, '%d/%m/%Y at %H:%i') AS game4_start, game4_screenshot,
					  DATE_FORMAT(game4_end, '%d/%m/%Y at %H:%i') AS game4_end,
					  DATE_FORMAT(game5_start, '%d/%m/%Y at %H:%i') AS game5_start, game5_screenshot,
					  DATE_FORMAT(game5_end, '%d/%m/%Y at %H:%i') AS game5_end,
					  DATE_FORMAT(game6_start, '%d/%m/%Y at %H:%i') AS game6_start, game6_screenshot,
					  DATE_FORMAT(game6_end, '%d/%m/%Y at %H:%i') AS game6_end
				 FROM account
				WHERE id = ".$_SESSION['student_id'];
			   
		$result = $db->query($qry);// or die(mysql_error());
		
		while($r = mysqli_fetch_array($result))
		{
			$name = $r['name'];
			$gender = $r['gender']=="B" ? "Laki-laki" : "Perempuan";
			$age = $r['age'];
			$signup_date = $r['signup_date'];
			$game1_start = $r['game1_start'];
			$game1_screenshot = $r['game1_screenshot'];
			$game1_end = $r['game1_end'];
			$game2_start = $r['game2_start'];
			$game2_screenshot = $r['game2_screenshot'];
			$game2_end = $r['game2_end'];
			$game3_start = $r['game3_start'];
			$game3_screenshot = $r['game3_screenshot'];
			$game3_end = $r['game3_end'];
			$game4_start = $r['game4_start'];
			$game4_screenshot = $r['game4_screenshot'];
			$game4_end = $r['game4_end'];
			$game5_start = $r['game5_start'];
			$game5_screenshot = $r['game5_screenshot'];
			$game5_end = $r['game5_end'];
			$game6_start = $r['game6_start'];
			$game6_screenshot = $r['game6_screenshot'];
			$game6_end = $r['game6_end'];
		}
		?>
		
		<form class="w3-container">
			<div class="w3-row">
				<div class="w3-third">
					<label>Nama Lengkap:</label>
					<input class="w3-input" type="text" value='<?php echo $name; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>Jenis Kelamin:</label>
					<input class="w3-input" type="text" value='<?php echo $gender; ?>' style="width:75%;" disabled>
				</div>
			</div><br />
			<div class="w3-row">
				<div class="w3-third">
					<label>Usia:</label>
					<input class="w3-input" type="text" value='<?php echo $age; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>Tgl Register:</label>
					<input class="w3-input" type="text" value='<?php echo $signup_date; ?>' style="width:75%;" disabled>
				</div>
			</div>
		</form>
		<br />
		<form class="w3-container">
			<div class="w3-row">
				<div class="w3-full">
					<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Fluid Reasoning (GF)</h3>
				</div>
			</div>
			<div class="w3-row">
				<div class="w3-third">
					<label>Start:</label>
					<input class="w3-input" type="text" value='<?php echo $game1_screenshot!=''?$game1_start:'-'; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>End:</label>
					<input class="w3-input" type="text" value='<?php echo $game1_screenshot!=''?$game1_end:'-'; ?>' style="width:75%;" disabled>
				</div>
			</div>
			<br/>
			<div class="w3-row">
				<div class="w3-full">
					<?php
					if ($game1_screenshot != '') {
					?>
					<img src='<?php echo "images/upload/".$game1_screenshot;?>' class="w3-round" alt="game1">
					<?php
					}
					?>
				</div>
			</div>
			<div class="w3-row">
				<div class="w3-third">
					<label>Start:</label>
					<input class="w3-input" type="text" value='<?php echo $game2_screenshot!=''?$game2_start:'-'; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>End:</label>
					<input class="w3-input" type="text" value='<?php echo $game2_screenshot!=''?$game2_end:'-'; ?>' style="width:75%;" disabled>
				</div>
			</div>
			<br/>
			<div class="w3-row">
				<div class="w3-full">
					<?php
					if ($game2_screenshot != '') {
					?>
					<img src='<?php echo "images/upload/".$game2_screenshot;?>' class="w3-round" alt="game2">
					<?php
					}
					?>
				</div>
			</div>
		</form>
		<hr />
		<form class="w3-container">
			<div class="w3-row">
				<div class="w3-full">
					<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Working Memory (GWM)</h3>
				</div>
			</div>
			<div class="w3-row">
				<div class="w3-third">
					<label>Start:</label>
					<input class="w3-input" type="text" value='<?php echo $game3_screenshot!=''?$game3_start:'-'; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>End:</label>
					<input class="w3-input" type="text" value='<?php echo $game3_screenshot!=''?$game3_end:'-'; ?>' style="width:75%;" disabled>
				</div>
			</div>
			<br/>
			<div class="w3-row">
				<div class="w3-full">
					<?php
					if ($game3_screenshot != '') {
					?>
					<img src='<?php echo "images/upload/".$game3_screenshot;?>' class="w3-round" alt="game3">
					<?php
					}
					?>
				</div>
			</div>
			<div class="w3-row">
				<div class="w3-third">
					<label>Start:</label>
					<input class="w3-input" type="text" value='<?php echo $game4_screenshot!=''?$game4_start:'-'; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>End:</label>
					<input class="w3-input" type="text" value='<?php echo $game4_screenshot!=''?$game4_end:'-'; ?>' style="width:75%;" disabled>
				</div>
			</div>
			<br/>
			<div class="w3-row">
				<div class="w3-full">
					<?php
					if ($game4_screenshot != '') {
					?>
					<img src='<?php echo "images/upload/".$game4_screenshot;?>' class="w3-round" alt="game5">
					<?php
					}
					?>
				</div>
			</div>
		</form>
		<hr />
		<form class="w3-container">
			<div class="w3-row">
				<div class="w3-full">
					<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Speed (GS)</h3>
				</div>
			</div>
			<div class="w3-row">
				<div class="w3-third">
					<label>Start:</label>
					<input class="w3-input" type="text" value='<?php echo $game5_screenshot!=''?$game5_start:'-'; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>End:</label>
					<input class="w3-input" type="text" value='<?php echo $game5_screenshot!=''?$game5_end:'-'; ?>' style="width:75%;" disabled>
				</div>
			</div>
			<br/>
			<div class="w3-row">
				<div class="w3-full">
					<?php
					if ($game5_screenshot != '') {
					?>
					<img src='<?php echo "images/upload/".$game5_screenshot;?>' class="w3-round" alt="game3">
					<?php
					}
					?>
				</div>
			</div>
			<div class="w3-row">
				<div class="w3-third">
					<label>Start:</label>
					<input class="w3-input" type="text" value='<?php echo $game6_screenshot!=''?$game6_start:'-'; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>End:</label>
					<input class="w3-input" type="text" value='<?php echo $game6_screenshot!=''?$game6_end:'-'; ?>' style="width:75%;" disabled>
				</div>
			</div>
			<br/>
			<div class="w3-row">
				<div class="w3-full">
					<?php
					if ($game6_screenshot != '') {
					?>
					<img src='<?php echo "images/upload/".$game6_screenshot;?>' class="w3-round" alt="game6">
					<?php
					}
					?>
				</div>
			</div>
		</form>
      </div>
    </div>
  </div>
  </form>

<!-- End page content -->
</div>

</body>
</html>
