<?php
	include("session.php");
	
	$gambar = "";
	
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
  	background-color: #008000;
  	height:100px;
  	width:300px;
  	color:white;
  	font-size: 27px;
  	border-radius: 25px;
  	border:5px solid white;
  	font-family: 'Fredoka One', cursive;
  	margin-bottom: 20px;
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

  .logo{
  font-family: 'Fredoka One', cursive;
  font-weight: bold;
  color:#630100;
}

	</style>
</head>
<body>
<?php
	//upload gambar
	if (isset($_POST['upload']))
	{
		
		//$nagambaradd = $_FILES['nagaadd']['name'];
		//$ukurangambar = $_FILES['nagaadd']['size'];//lihat ukuran gambar
		//$typegambar = $_FILES['nagaadd']['type']; // lihat type gambar
		//$file_tmp = $_FILES['nagaadd']['tmp_name'];
		
		//$nagambaradd_temp = explode(".", $nagambaradd);
		
		//$extension = end($nagambaradd_temp);
		//$namaakhir = $login_session;
		//$namaakhir = "game4_".$namaakhir.".".$extension;
		
		//if(($typegambar == "image/jpeg" || $typegambar == "image/png" || $typegambar == "image/jpg") && 
		//	$nagambaradd !="" && $ukurangambar < 1000000 )
		//{
			$a="UPDATE account 
				   SET game4_end = '".$date."'
				 WHERE id=".$login_session;

			$result = $db->query($a);	

		//	move_uploaded_file($file_tmp,"images/upload/".$namaakhir);
			
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
		//}
		//else
		//{
	?>
			<script type="text/javascript">
				alert('Ada kesalahan pada gambar.');
			</script> 
	<?php
		//}
	}
	
	// Go to game page
	if (isset($_POST['start']))
	{
		$query="UPDATE account 
				   SET game4_start = '".$date."'
				 WHERE id=".$login_session;

		$result = $db->query($query);
		
		if ($result === TRUE) 
		{
			?>
			<script>
				window.open('https://www.braingymmer.com/en/brain-games/flip/play/', '_blank');
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
    <a href="#" class="w3-bar-item logo"><img src="images/logo3.jpg" style="width:150px; height:50px;"> - Skala Penilaian Perilaku Atentif Siswa</a>
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding-64" style="max-width:1564px">

  <br />
  <!-- Project Section -->
  <div class="w3-container w3-padding-64" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 gameTitle">Permainan D: Flip</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col m8 l9 w3-margin-bottom" style="width:100%;text-align: center;">
      <div class="w3-display-container gameInstruction"><img src="images/flip.png" style="width:200px; height:200px;margin-bottom: 20px;">
       <p>Kamu harus perhatikan baik-baik potongan-potongan daging dan sate barbekiu yang sedang dipanggang. Klik setiap daging dan sate barbekiu <b>segera setelah lingkaran penunjuk kematangan berwarna jingga (orange)</b>. Hati-hati, jangan sampai dagingnya belum matang atau malah gosong! </p> 
      </div>
    </div>
  </div>
  
  <form class="validation-wizard" method="post" enctype="multipart/form-data">
  <div class="w3-row-padding">
    <div class="w3-col m8 l9 w3-margin-bottom" style="width:100%;text-align: center;">
      <?php
		$qry ="SELECT game4_start
             FROM account
            WHERE id =".$login_session;
         
		$result = $db->query($qry);// or die(mysql_error());
	
		while($r = mysqli_fetch_array($result))
		{
			$game  = $r['game4_start'] == null ? "Y" : "N";
		}
		
		if ($game == "Y")
		{
	  ?>
      <div class="w3-display-container">
		<button type="submit" name="start" id="start" class="btn btnStart">Mulai Permainan</button>
      </div>
	  <?php
		}
		else
		{
	  ?>
	  <div class="w3-display-container">
		<button type="submit" class="btn btnUpload" name="upload" id="upload">Selesai Permainan </button>
	  </div>
	  <?php
		}
	  ?>
    </div>
  </div>
  
  <div class="w3-row-padding">
	<div class="w3-col l3 m6 w3-margin-bottom uploadScreenshot">
      <div class="w3-display-container">
	  &nbsp;
		<!--
        <label for="input-file-now-custom-1">Unggah hasil screenshot di bawah ini:</label>
		<input type="hidden" value="<?php echo $login_session;?>" name="kode" />      

		<input type="file" name="nagaadd" id="input-file-now-custom-1" class="dropify" data-default-file="images/upload/<?php if ($gambar==""){echo "";}else{echo $gambar;}?>"  />

		<button type="submit" class="btn btnUpload" name="upload" id="upload">Unggah Gambar</button>
		-->
	  </div>
    </div>
  </div>
  <br/>
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
