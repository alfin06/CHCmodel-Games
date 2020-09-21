<?php
	include("config.php");
	session_start();
	
	$_SESSION['student_id'] = null;
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

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>
	
	html, body {
      min-height: 100%;
      background-image: url("images/bg1.png");
      /* Full height */
      height: 100%;
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
	
    body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: "Comic Sans MS", cursive, sans-serif;
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

	 .title{
	 	text-align: center;
	 	font-size: 30px;
	 	 font-family: "Comic Sans MS", cursive, sans-serif;
	 }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.php" class="w3-bar-item w3-button"><i class="fas fa-home"></i></a>
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px; margin-top: 20px;">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32 w3-margin-32" id="projects">
    <h3 class="title">Results</h3>
  </div>

  <form method="POST">
  <div class="w3-row-padding">
    <div class="w3-col m12 w3-margin-bottom">
      <div class="w3-display-container" style="overflow-x:auto;">
		<table class="w3-table-all w3-hoverable dv_tableresult ">
			<thead>
				<tr class="w3-pale-yellow">
					<th>&nbsp;</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Usia</th>
					<th>Tgl Register</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Show data
				$qry ="SELECT id, name, gender, age, DATE_FORMAT(signup_date, '%d/%m/%Y at %H:%i') AS signup_date
						FROM account
						ORDER BY signup_date DESC";
					   
				$result = $db->query($qry);// or die(mysql_error());
				
				while($r = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>";
					echo "<button type='submit' id='id[".$r['id']."]' name='id[".$r['id']."]' class='w3-circle id' formnovalidate><i class='fa fa-search'></i></button>";
					echo "</td>";
					echo "<td>";
					echo $r['name'];
					echo "</td>";
					echo "<td>";
					echo $r['gender']=="B"? "Boy" : "Girl";
					echo "</td>";
					echo "<td>";
					echo $r['age'] . " y.o.";
					echo "</td>";
					echo "<td>";
					echo $r['signup_date'];
					echo "</td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
		<?php
		// make the row editable
		if (isset($_POST['id']))
		{
			$id = key($_POST['id']);
			$_SESSION['student_id'] = $id;
				
			echo "<script>";
			echo "window.open('result2.php', '_SELF');";
			echo "</script>";
		}
		?>
      </div>
    </div>
  </div>
  </form>

<!-- End page content -->
</div>

</body>
</html>
