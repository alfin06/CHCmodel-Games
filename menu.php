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
<link rel="icon" type="image/x-icon" href="images/logo4.jpg" />

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

 <style>
      html, body {
      min-height: 100%;
      background: #82bcd8;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: "Comic Sans MS", cursive, sans-serif;
      font-size: 20px;
      color: #eee;
      }
	  
	  button {
		cursor: pointer;  
	  }
	  .instruction {
		font-size: 10pt;
		margin-right: 50%;
	  }
    </style>

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-arrow-left"></i> </a>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1250px; min-height:300px;" id="home">
 <!--  <img class="w3-image" src="images/background.jpg" alt="Architecture" width="1500" height="800"> -->
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Selamat datang <?php echo $name; ?>!</b></span></h1>
	<br/>
	<span class="w3-hide-small w3-text-light-grey">Mari bergabung dalam serangkaian permainan ketangkasan otak berikut ini.</span>
  </div>
</header>

<div class="w3-container">
	<div class="w3-full instruction">
		<span>Petunjuk Utama (<b>WAJIB DIBACA</b> sebelum mulai):</span>
		<ol>
			<li>Siapkan laptop/ PC kamu untuk mengikuti serangkaian penugasan berupa permainan ketangkasan otak selama ±60 menit ke depan, jadi tetaplah tinggal di dalam website ini.</li>
			<li>Buatlah folder baru di desktop kamu dan beri nama Penugasan Siswa untuk menyimpan dokumentasi selama penugasan berlangsung</li>
			<li>Saat akan mulai bermain kamu tidak perlu login ke website braingymmer, tapi setiap kali selesai bermain 1 permainan, kamu harus login ya. Bermainlah secara berurutan sesuai dengan urutan huruf (A sampai E) dengan mengikuti alur seperti pada instruksi nomor 6.</li>
			<li>Setiap kali selesai bermain, kamu harus login ke website braingymmer untuk dapat melihat hasil skornya menggunakan email dan password yang sudah kamu buat sebelumnya pada waktu ‘register’, lalu dokumentasikan skor kamu dengan cara screenshot tampilan skor kamu pada permainan tersebut.
				<br />Cara screenshot:
				<ul>
					<li>*Tekan tombol print screen pada keyboard kamu, lalu buka program <b>Paint</b> pada laptop/PC kamu, 
					    paste di sana (dengan menekan tombol Ctrl dan V secara bersamaan pada keyboard kamu. 
						Kemudian simpan file dengan format <b>JPEG</b> di folder yang tadi sudah kamu buat di desktop dengan 
						nama masing-masing permainan.</li>
				</ul>
			</li>
			<li>Setelah menyimpan screenshot hasil skor kamu, silahkan kembali ke halaman SPPAS untuk unggah (upload) 
			    screenshot skor permainan kamu pada bagian yang sudah disediakan.</li>
			<li>Sebelum kamu melanjutkan ke permainan B, <b>ingat kamu harus logout dari website brain gymmer.</b> 
				<br/>Begini alurnya: 
				<ol type="a">
					<li>bermain (tanpa login ke website braingymmer)</li>
					<li>login ke website braingymmer untuk dapat melihat dan screenshot hasil skor permainannya</li>
					<li>logout untuk dapat melanjutkan bermain ke permainan berikutnya.   
						Ulangi alur yang sama untuk permainan B,C,D dan E.</li>
				</ol>
			</li>
			<li>Kamu hanya diberikan satu kali kesempatan dalam setiap permainan, jadi bermainlah sebaik dan secepat yang kamu bisa sampai selesai.</li>
			<li>Untuk permainan F (Rush Hour), kamu akan bermain sebanyak 3 kali mulai dari tingkat kesulitan easy, medium, 
			    lalu hard. Setiap kali berhasil menyelesaikan satu level permainan, segera screenshot, kemudian simpan dengan 
				format <b>JPEG</b> di desktop dengan nama:<br/>
				RH1 untuk level easy, RH2 untuk level medium, RH3 untuk level hard. Setelah    
				selesai bermain ketiga level tersebut, kembali ke halaman SPPAS untuk unggah  
				(upload) screenshot hasil permainanmu.
			</li>
			<li>Silahkan menyimak video tutorial berikut ini agar semakin jelas alur bermain dan cara mendokumentasikan 
			    (screenshot) skor kamu pada setiap permainan.</li>
		</ol> 
	</div>
</div>

<div class="w3-container">
  
<div class="w3-cell-row">
  <div class="w3-container w3-cell">
	<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Permainan A</h3>
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
      <button onclick="window.location.href='game1.php';" disabled style="width:150px; height:150px;"><img src="images/bait.png" style="width:100px; height:100px;"> Bait</button>
    <?php
    }
    else
    {
    ?>
      <button onclick="window.location.href='game1.php';" style="width:150px; height:150px;"><img src="images/bait.png" style="width:100px; height:100px;"> Bait</button>
    <?php
    }
    ?>
  </div>

  <div class="w3-container w3-cell">
	<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Permainan B</h3>
    <?php
    // Check if the game is available
    $qry ="SELECT game1_screenshot, game2_screenshot
			 FROM account
            WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game2_screenshot'] != "" ? "N" : "Y";
	  $game1        = $r['game1_screenshot'] != "" ? "N" : "Y";
    }
    
    if ($isavailable == "N" || $game1 == "Y")
    {
    ?>
      <button onclick="window.location.href='game2.php';" disabled style="width:150px; height:150px;"><img src="images/digit.png" style="width:100px; height:100px;"> Digit</button>
    <?php
    }
    else
    {
    ?>
     <button onclick="window.location.href='game2.php';" style="width:150px; height:150px;"><img src="images/digit.png" style="width:100px; height:100px;"> Digit</button>
    <?php
    }
    ?>
  </div>

</div>
</div>


<div class="w3-container">
<div class="w3-cell-row">
  <div class="w3-container w3-cell">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Permainan C</h3>
<?php
    // Check if the game is available
    $qry ="SELECT game2_screenshot, game3_screenshot
        FROM account
         WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game3_screenshot'] != "" ? "N" : "Y";
      $game2  = $r['game2_screenshot'] != "" ? "N" : "Y";
    }
    
    if ($isavailable == "N" || $game2 == "Y")
    {
    ?>
      <button onclick="window.location.href='game3.php';" disabled style="width:150px; height:150px;"><img src="images/moving.png" style="width:100px; height:100px;"> Moving</button>
    <?php
    }
    else
    {
    ?>
      <button onclick="window.location.href='game3.php';" style="width:150px; height:150px;"><img src="images/moving.png" style="width:100px; height:100px;"> Moving </button>
    <?php
    }
    ?>
  </div>

  <div class="w3-container w3-cell">
	<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Permainan D</h3>
    <?php
    // Check if the game is available
    $qry ="SELECT game3_screenshot, game4_screenshot
        FROM account
         WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game4_screenshot'] != "" ? "N" : "Y";
      $game3  = $r['game3_screenshot'] != "" ? "N" : "Y";
    }
    
    if ($isavailable == "N" || $game3 == "Y")
    {
    ?>
      <button onclick="window.location.href='game4.php';" disabled style="width:150px; height:150px;"><img src="images/flip.png" style="width:100px; height:100px;"> Flip</button>
    <?php
    }
    else
    {
    ?>
     <button onclick="window.location.href='game4.php';" style="width:150px; height:150px;"><img src="images/flip.png" style="width:100px; height:100px;"> Flip</button>
    <?php
    }
    ?>
  </div>

</div>
</div>

<div class="w3-container">
<div class="w3-cell-row">
  <div class="w3-container w3-cell">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Permainan E</h3>
<?php
    // Check if the game is available
    $qry ="SELECT game4_screenshot, game5_screenshot
        FROM account
         WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game5_screenshot'] != "" ? "N" : "Y";
      $game4  = $r['game4_screenshot'] != "" ? "N" : "Y";
    }
    
    if ($isavailable == "N" || $game4 == "Y")
    {
    ?>
      <button onclick="window.location.href='game5.php';" disabled style="width:150px; height:150px;"><img src="images/post.png" style="width:100px; height:100px;"> Post</button>
    <?php
    }
    else
    {
    ?>
      <button onclick="window.location.href='game5.php';" style="width:150px; height:150px;"><img src="images/post.png" style="width:100px; height:100px;"> Post</button>
    <?php
    }
    ?>
  </div>

  <div class="w3-container w3-cell">
	<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Permainan F</h3>
    <?php
    // Check if the game is available
    $qry ="SELECT game5_screenshot, game6_screenshot
        FROM account
         WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game6_screenshot'] != "" ? "N" : "Y";
      $game5  = $r['game5_screenshot'] != "" ? "N" : "Y";
    }
    
    if ($isavailable == "N" || $game5 == "Y")
    {
    ?>
      <button onclick="window.location.href='game6.php';" disabled style="width:150px; height:150px;"><img src="images/rushhour.png" style="width:100px; height:100px;"> Rush Hour</button>
    <?php
    }
    else
    {
    ?>
     <button onclick="window.location.href='game6.php';" style="width:150px; height:150px;"><img src="images/rushhour.png" style="width:100px; height:100px;"> Rush Hour</button>
    <?php
    }
    ?>
  </div>

</div>
</div>



  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Terima kasih atas partisipasi kamu!</h3>
  </div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black">
</footer>

</body>
</html>
