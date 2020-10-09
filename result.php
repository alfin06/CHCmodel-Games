<?php
	include("config.php");
	session_start();
	
	$_SESSION['student_id'] = null;
	$_SESSION['survey_id'] = null
?>

<!DOCTYPE html>
<html>
<title>Games | Result</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/x-icon" href="images/logo4.jpg" />

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
	
	.btn {
		cursor: pointer;
		border: none;
	    color: white;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 20px;
		width:35%;
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
	 
	 .data {
		 margin: auto;
         padding: 10px;
		 text-align: center;
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
    <h3 class="title">Selamat Datang di Halaman Admin!</h3>
  </div>
  
  <div class="w3-container w3-padding-32 w3-margin-32 data">
	  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#collapseExample">
		Skala Penilaian Perilaku Atentif Siswa
	  </button>
		
	  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2">
		Skala Penilaian Guru
	  </button>
  </div>
  <br />

  <form method="POST" class="collapse" id="collapseExample">
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
						<th>Tahun Lalu Kelas</th>
						<th>Tgl Register</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// Show data
					$qry ="SELECT id, name, gender, age, DATE_FORMAT(signup_date, '%d/%m/%Y at %H:%i') AS tgl_signup, grade
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
						echo $r['gender']=="B"? "Laki-laki" : "Perempuan";
						echo "</td>";
						echo "<td>";
						echo $r['age'] . " thn";
						echo "</td>";
						echo "<td>";
						echo $r['grade'];
						echo "</td>";
						echo "<td>";
						echo $r['tgl_signup'];
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
  
  <form method="POST" class="collapse" id="collapseExample2">
	  <div class="w3-row-padding">
		<div class="w3-col m12 w3-margin-bottom">
		  <div class="w3-display-container" style="overflow-x:auto;">
			<table class="w3-table-all w3-hoverable dv_tableresult ">
				<thead>
					<tr class="w3-pale-yellow">
						<th>&nbsp;</th>
						<th>Nama Guru</th>
						<th>Kelas yang di ajar</th>
						<th>Nama Siswa</th>
						<th>Jumlah Skor</th>
						<th>Tgl Survey</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// Show data
					$qry ="SELECT id, name, grade, student_name, 
								  (question1+question2+question3+question4+question5+question6+question7+question8+question9+question10+question11
								       +question12+question13+question14+question15+question16+question17+question18+question19+question20) AS skor,
								   DATE_FORMAT(signup_date, '%d/%m/%Y at %H:%i') AS tgl_signup
							FROM survey
							ORDER BY signup_date DESC";
						   
					$result = $db->query($qry);// or die(mysql_error());
					
					while($r = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>";
						echo "<button type='submit' id='myid[".$r['id']."]' name='myid[".$r['id']."]' class='w3-circle id' formnovalidate><i class='fa fa-search'></i></button>";
						echo "</td>";
						echo "<td>";
						echo $r['name'];
						echo "</td>";
						echo "<td>";
						echo $r['grade'];
						echo "</td>";
						echo "<td>";
						echo $r['student_name'];
						echo "</td>";
						echo "<td>";
						echo $r['skor'];
						echo "</td>";
						echo "<td>";
						echo $r['tgl_signup'];
						echo "</td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
			<?php
			// make the row editable
			if (isset($_POST['myid']))
			{
				$id = key($_POST['myid']);
				$_SESSION['survey_id'] = $id;
					
				echo "<script>";
				echo "window.open('survey.php', '_SELF');";
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
