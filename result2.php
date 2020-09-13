<?php
	include("config.php");
	session_start();
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

<style>
	hr.new {
	  border-top: 1px solid black;
	  width:15%;
	  margin-top: 0;
	  padding: 0;
	}
	
	button.id {
		cursor: pointer;
	}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.php" class="w3-bar-item w3-button"><b>Home</b></a>
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Result</h3>
	<hr class="new" />
  </div>

  <form method="POST">
  <div class="w3-row-padding">
    <div class="w3-col m12 w3-margin-bottom">
      <div class="w3-display-container">
		<?php
		// Show data
		$qry ="SELECT id, name, gender, age, DATE_FORMAT(signup_date, '%d/%m/%Y at %H:%i') AS signup_date,
					  DATE_FORMAT(game1_start, '%d/%m/%Y at %H:%i') AS game1_start, game1_screenshot,
					  DATE_FORMAT(game1_end, '%d/%m/%Y at %H:%i') AS game1_end
				 FROM account
				WHERE id = ".$_SESSION['student_id'];
			   
		$result = $db->query($qry);// or die(mysql_error());
		
		while($r = mysqli_fetch_array($result))
		{
			$name = $r['name'];
			$gender = $r['gender']=="B" ? "Boy" : "Girl";
			$age = $r['age'];
			$signup_date = $r['signup_date'];
			$game1_start = $r['game1_start'];
			$game1_screenshot = $r['game1_screenshot'];
			$game1_end = $r['game1_end'];
		}
		?>
		
		<form class="w3-container">
			<div class="w3-row">
				<div class="w3-third">
					<label>Name:</label>
					<input class="w3-input" type="text" value='<?php echo $name; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>Gender:</label>
					<input class="w3-input" type="text" value='<?php echo $gender; ?>' style="width:75%;" disabled>
				</div>
			</div><br />
			<div class="w3-row">
				<div class="w3-third">
					<label>Age:</label>
					<input class="w3-input" type="text" value='<?php echo $age; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>Signup Date:</label>
					<input class="w3-input" type="text" value='<?php echo $signup_date; ?>' style="width:75%;" disabled>
				</div>
			</div>
		</form>
		<br />
		<form class="w3-container">
			<div class="w3-row">
				<div class="w3-full">
					<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Fluid Reasoning (GF) - Rush Hour</h3>
				</div>
			</div>
			<div class="w3-row">
				<div class="w3-third">
					<label>Start:</label>
					<input class="w3-input" type="text" value='<?php echo $game1_start; ?>' style="width:75%;" disabled>
				</div>
				<div class="w3-third">
					<label>End:</label>
					<input class="w3-input" type="text" value='<?php echo $game1_end; ?>' style="width:75%;" disabled>
				</div>
			</div>
			<br/>
			<div class="w3-row">
				<div class="w3-full">
					<img src='<?php echo "images/upload/".$game1_screenshot;?>' class="w3-round" alt="game1">
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
