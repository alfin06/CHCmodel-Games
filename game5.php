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
      font-family: 'Grandstander', cursive;
      font-size: 20px;
      color: #eee;
    }
	
	 button {
		cursor: pointer; 
	 }
	</style>
</head>
<body>
<?php
	//upload gambar
	if (isset($_POST['upload']))
	{
		
		$nagambaradd = $_FILES['nagaadd']['name'];
		$ukurangambar = $_FILES['nagaadd']['size'];//lihat ukuran gambar
		$typegambar = $_FILES['nagaadd']['type']; // lihat type gambar
		$file_tmp = $_FILES['nagaadd']['tmp_name'];
		
		$nagambaradd_temp = explode(".", $nagambaradd);
		
		$extension = end($nagambaradd_temp);
		$namaakhir = $login_session;
		$namaakhir = "game5_".$namaakhir.".".$extension;
		
		if(($typegambar == "image/jpeg" || $typegambar == "image/png" || $typegambar == "image/jpg") && 
			$nagambaradd !="" && $ukurangambar < 1000000 )
		{
			$a="UPDATE account 
				   SET game5_screenshot = '".$namaakhir."',
				       game5_end = '".$date."'
				 WHERE id=".$login_session;

			$result = $db->query($a);	

			move_uploaded_file($file_tmp,"images/upload/".$namaakhir);
			
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
				   SET game5_start = '".$date."'
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
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <br />
  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Baca dan ikuti instruksi di bawah ini</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col m8 l9 w3-margin-bottom">
      <div class="w3-display-container">
        <ol>
			<li>Klik tombol <b>Start</b> untuk memulai permainan. Layar baru akan muncul di browser kamu.</li>
			<li>Ikuti instruksi di halaman permainan dan selesaikan permainannya.</li>
			<li>Setelah selesai permainannya, mohon login.</li>
			<li>Setelah login, akan muncul hasil permainannya. Dimohon untuk mengambil screenshot hasil permainan kamu dan simpan dalam format <b>JPG/PNG</b> (kamu bisa menggunakan tekan tombol "Windows" + "Shift" + "s" secara bersamaan untuk pengguna windows atau tekan tombol "Shift" + "Command" + "4" secara bersamaan untuk pengguna mac).</li>
			<li>Logout dari akun kamu setelah menggambil screenshot. Kemudian, tutup layar permainan dan segera kembali ke halaman ini.</li>
			<li>Unggah hasil screenshot kamu ke tempat pengunggahan di bawah ini dengan menekan kotak putih yang tersedia.</li>
			<li>Pilih file screenshot kamu.</li>
			<li>Dan terakhir, tekan tombol <b>Unggah Gambar</b>. Tunggu beberapa detik sampai kamu kembali ke halaman menu game.</li>
		</ol>
      </div>
    </div>
  </div>
  
  <form class="validation-wizard" method="post" enctype="multipart/form-data">
  <div class="w3-row-padding">
    <div class="w3-col m8 l9 w3-margin-bottom">
      <div class="w3-display-container">
		<button type="submit" name="start" id="start" class="btn btn-success btn-lg">Start</button>
      </div>
    </div>
  </div>
  
  <div class="w3-row-padding">
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <label for="input-file-now-custom-1">Unggah hasil screenshot di bawah ini:</label>
		<input type="hidden" value="<?php echo $login_session;?>" name="kode" />      

		<input type="file" name="nagaadd" id="input-file-now-custom-1" class="dropify" data-default-file="images/upload/<?php if ($gambar==""){echo "";}else{echo $gambar;}?>"  />

		<button type="submit" class="btn waves-effect waves-light btn-warning" name="upload" id="upload">Unggah Gambar</button>
      </div>
    </div>
  </div>
  </form>

<!-- End page content -->
</div>

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
