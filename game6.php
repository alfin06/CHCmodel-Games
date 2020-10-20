<?php
	include("session.php");
	
	$gambar = "";
	$gambar2 = "";
	$gambar3 = "";
	
	date_default_timezone_set('Asia/Bangkok');
	$date = date("Y-m-d G:i:s");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Games | Menu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="icon" type="image/x-icon" href="images/logo4.jpg" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Coming+Soon&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link href="plugins/toastr/css/toastr.min.css" rel="stylesheet">  
	<script src="plugins/toastr/js/toastr.min.js"></script>

	<link rel="stylesheet" href="plugins/dropify/dist/css/dropify.min.css">
	
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	<style>
	html, body {
      min-height: 100%;
      background-color: #82bcd8;;
    }
    body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: 'Coming Soon', cursive;
      font-size: 20px;
      color: #eee;
    }
	
	   .footer{
      background-color: #9df2e6;
      color:white;
    }
	 button {
		cursor: pointer; 
	 }
	  .gameTitle{
	 	text-align: center;
	 	font-size: 40px;
	 	font-family: 'Fredoka One', cursive;
	 }

	 .gameInstruction{
	 	 background-color: #546f70;
  border-radius: 5px;
  border:15px solid #ffd065;
  margin-left: 100px;
  margin-right: 100px;
  padding-top: 50px;
  padding-bottom: 50px;
	 }
	 @media (max-width: 600px){
  .gameInstruction{
  	margin-left: 20px;
  margin-right: 20px;
  padding-bottom:50px;
}
  }

  .btnStart{
  	background-color: #eb3434;
  	height:100px;
  	width:300px;
  	color:white;
  	font-size: 27px;
  	border-radius: 25px;
  	border:5px solid white;
  	font-family: 'Fredoka One', cursive;
  	margin-bottom: 20px;
  }

  

  .btnStart:hover{
  	background-color: #ab4848;
  }

  .btnUpload{
  	background-color: #edb535;
  	height:50px;
  	width:200px;
  	color:white;
  	font-size: 18px;
  	border-radius: 15px;
  	border:3px solid white;
  	font-family: 'Fredoka One', cursive;
  	margin-top: 10px;
  }

  .btnUpload:hover{
  	background-color: #c6a760;
  }

  .uploadScreenshot{
  	margin-left: 100px;
  margin-right: 100px;
  }
  @media (max-width: 600px){
  .uploadScreenshot{
  	margin-left: 20px;
  margin-right: 20px;
  padding-bottom:50px;
}
  }
	</style>
</head>
<body>
<?php
	//upload gambar
	if (isset($_POST['upload']))
	{
		// Gambar 1
		$nagambaradd = $_FILES['nagaadd']['name'];
		$ukurangambar = $_FILES['nagaadd']['size'];//lihat ukuran gambar
		$typegambar = $_FILES['nagaadd']['type']; // lihat type gambar
		$file_tmp = $_FILES['nagaadd']['tmp_name'];
		
		$nagambaradd_temp = explode(".", $nagambaradd);
		
		$extension = end($nagambaradd_temp);
		$namaakhir = $login_session;
		$namaakhir = "game6_".$namaakhir.".".$extension;
		
		// Gambar 2
		$nagambaradd2 = $_FILES['nagaadd2']['name'];
		$ukurangambar2 = $_FILES['nagaadd2']['size'];//lihat ukuran gambar
		$typegambar2 = $_FILES['nagaadd2']['type']; // lihat type gambar
		$file_tmp2 = $_FILES['nagaadd2']['tmp_name'];
		
		$nagambaradd_temp2 = explode(".", $nagambaradd2);
		
		$extension2 = end($nagambaradd_temp2);
		$namaakhir2 = $login_session;
		$namaakhir2 = "game6b_".$namaakhir2.".".$extension2;
		
		// Gambar 3
		$nagambaradd3 = $_FILES['nagaadd3']['name'];
		$ukurangambar3 = $_FILES['nagaadd3']['size'];//lihat ukuran gambar
		$typegambar3 = $_FILES['nagaadd3']['type']; // lihat type gambar
		$file_tmp3 = $_FILES['nagaadd3']['tmp_name'];
		
		$nagambaradd_temp3 = explode(".", $nagambaradd3);
		
		$extension3 = end($nagambaradd_temp3);
		$namaakhir3 = $login_session;
		$namaakhir3 = "game6c_".$namaakhir3.".".$extension3;
		
		if ($nagambaradd == "" || $nagambaradd2 == "" || $nagambaradd3 == "")
		{
		?>
			<script type="text/javascript">
				alert('Mohon upload semua screenshot secara bersamaan.');
			</script> 
		<?php	
		}
		else if((($typegambar == "image/jpeg" || $typegambar == "image/png" || $typegambar == "image/jpg") && 
			$nagambaradd !="" && $ukurangambar < 1000000 ) && (($typegambar2 == "image/jpeg" || $typegambar2 == "image/png" || $typegambar2 == "image/jpg") && 
			$nagambaradd2 !="" && $ukurangambar2 < 1000000 ) && (($typegambar3 == "image/jpeg" || $typegambar3 == "image/png" || $typegambar3 == "image/jpg") && 
			$nagambaradd3 !="" && $ukurangambar3 < 1000000 ))
		{
			$a="UPDATE account 
				   SET game6_screenshot = '".$namaakhir."',
				       game6b_screenshot = '".$namaakhir2."',
				       game6c_screenshot = '".$namaakhir3."',
				       game6_end = '".$date."'
				 WHERE id=".$login_session;

			$result = $db->query($a);	

			move_uploaded_file($file_tmp,"images/upload/".$namaakhir);
			move_uploaded_file($file_tmp2,"images/upload/".$namaakhir2);
			move_uploaded_file($file_tmp3,"images/upload/".$namaakhir3);
			
			if ($result === TRUE) 
			{
	?>
				<script type="text/javascript">
					window.open('menu.php', '_self');
				</script> 
	<?php
			} 
			else 
			{
	?>
				<script type="text/javascript">
					alert('Gambar gagal diunggah.');
				</script> 
	<?php
			}
		}
		else
		{
	?>
			<script type="text/javascript">
				alert('Ada kesalahan pada gambar.');
			</script> 
	<?php
		}
	}
	
	// Go to game page
	if (isset($_POST['start']))
	{
		$query="UPDATE account 
				   SET game6_start = '".$date."'
				 WHERE id=".$login_session;

		$result = $db->query($query);
		
		if ($result === TRUE) 
		{
			?>
			<script>
				window.open('rushhour.php', '_blank');
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
				alert('Ada error pada link. Mohon menghubungi admin/developer.');
			</script> 
			<?php
		}
	}
?>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="menu.php" class="w3-bar-item w3-button"><i class="fas fa-arrow-left"></i></a>
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <br />
  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 gameTitle">Permainan F: Rush Hour</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col m8 l9 w3-margin-bottom" style="width:100%;text-align: center;">
      <div class="w3-display-container gameInstruction"><img src="images/rushhour.png" style="width:200px; height:200px;margin-bottom: 20px;">
        <p>Bermainlah sebanyak 3 kali dimulai dari tingkat kesulitan easy, lalu medium, lalu hard.</p>
		<p>Ayo, keluarkan balok berwarna merah ke arah exit dengan cara menggeser ke atas/bawah/kiri/kanan</p> 
		<p>balok-baloknya. Pikirkan baik-baik saat akan menggeser balok-baloknya, semakin sedikit (efektif)</p>
		<p>gerakan yang kamu buat, maka semakin baik skor kamu.</p> 
      </div>
    </div>
  </div>
  
  <form class="validation-wizard" method="post" enctype="multipart/form-data">
  <div class="w3-row-padding">
    <div class="w3-col m8 l9 w3-margin-bottom" style="width:100%;text-align: center;">
      <div class="w3-display-container">
		<button type="submit" name="start" id="start" class="btn btnStart">Mulai Permainan</button>
      </div>
    </div>
  </div>
  
  <div class="w3-row-padding">
	<div class="w3-col l3 m6 w3-margin-bottom uploadScreenshot">
      <div class="w3-display-container">
        <label for="input-file-now-custom-1">Unggah hasil screenshot dibawah ini:</label>
		<input type="hidden" value="<?php echo $login_session;?>" name="kode" />      
		
		<p>Easy</p>
		<input type="file" name="nagaadd" id="input-file-now-custom-1" class="dropify" data-default-file="images/upload/<?php if ($gambar==""){echo "";}else{echo $gambar;}?>"  />
		<p>Medium</p>
		<input type="file" name="nagaadd2" id="input-file-now-custom-1" class="dropify" data-default-file="images/upload/<?php if ($gambar2==""){echo "";}else{echo $gambar2;}?>"  />
		<p>Hard</p>
		<input type="file" name="nagaadd3" id="input-file-now-custom-1" class="dropify" data-default-file="images/upload/<?php if ($gambar3==""){echo "";}else{echo $gambar3;}?>"  />

		<button type="submit" class="btn btnUpload" name="upload" id="upload">Unggah Gambar</button>
      </div>
    </div>
  </div>
  </form>

<!-- End page content -->
</div>
<footer class="w3-center footer">
  <i class="fa fa-copyright" aria-hidden="true"></i>copyright reserverd 2020 - Developed by FINNIX
</footer>
</body>

<script src="plugins/dropify/dist/js/dropify.min.js"></script>
<script>
$(document).ready(function() {	
	// Basic
	$('.dropify').dropify();

	// Translated
	$('.dropify-fr').dropify({
		messages: {
			default: 'Glissez-déposez un fichier ici ou cliquez',
			replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
			remove: 'Supprimer',
			error: 'Désolé, le fichier trop volumineux'
		}
	});

	// Used events
	var drEvent = $('#input-file-events').dropify();

	drEvent.on('dropify.beforeClear', function(event, element) {
		return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
	});

	drEvent.on('dropify.afterClear', function(event, element) {
		alert('File deleted');
	});

	drEvent.on('dropify.errors', function(event, element) {
		console.log('Has Errors');
	});

	var drDestroy = $('#input-file-to-destroy').dropify();
	drDestroy = drDestroy.data('dropify')
	$('#toggleDropify').on('click', function(e) {
		e.preventDefault();
		if (drDestroy.isDropified()) {
			drDestroy.destroy();
		} else {
			drDestroy.init();
		}
	})
});
</script>
</html>
