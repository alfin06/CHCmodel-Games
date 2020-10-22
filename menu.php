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
<link href="https://fonts.googleapis.com/css2?family=Walter+Turncoat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Coming+Soon&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dekko&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>


 <style>
      html, body {
      min-height: 100%;
      background: url("images/background2.png");
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: 'Dekko', cursive;
     
      font-size: 20px;
      color:#807b7b;
      }
	  
	  button {
		cursor: pointer;  
	  }

    .footer{
      background-color: #9df2e6;
      color:white;
    }


.petunjuk{
padding-left:100px;
padding-right:100px;
padding-top:100px;

}

.petunjukTitle{
  font-size: 30px;
  font-family: 'Patrick Hand', cursive;
  color:#5c5555;
}

.gameTitle{
  font-family: 'Patrick Hand', cursive;
  font-size: 40px;
}
.gamelist{
padding-left:100px;
padding-right:100px;
background-color: white;
}

    @media (max-width: 600px){
  .petunjuk {
    padding-left:20px;
padding-right:20px;
padding-top:40px;
  }
  .gamelist{
    padding-left:10px;
padding-right:10px;
background-color: white;
  }
  .gameTitle{
  font-family: 'Patrick Hand', cursive;
  font-size: 25px;
}
}

.interlude{
  background: url("images/cloud.png");
}

.interlude2{
  background-color: white;
}

.thankyoufont{
  font-family: 'Coming Soon', cursive;
}



.headerwelcome{
   background-color: #546f70;
  border-radius: 5px;
  border:15px solid #ffd065;
  padding-top: 300px;
  padding-bottom:200px;
  margin-top: 100px;
}
@media (max-width: 600px){
  .headerwelcome{
  padding-bottom:50px;
}
  }

.defaultFont{
  font-family: 'Walter Turncoat', cursive;
}
.titleFont{
  font-family: 'Rammetto One', cursive;
  font-size: 67px;
  color:#5db8c1;
    -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: #fff;
}

.titleWelcoming{
  font-family: 'Walter Turncoat', cursive;
}

.logo{
  font-family: 'Fredoka One', cursive;
  font-weight: bold;
  color:#630100;
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
  <a href="#" class="w3-bar-item logo"><img src="images/logo3.jpg" style="width:150px; height:50px;"> - Skala Penilaian Perilaku Atentif Siswa</a>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide headerwelcome" style="max-width:1250px; min-height:300px;" id="home" >
 <!--  <img class="w3-image" src="images/background.jpg" alt="Architecture" width="1500" height="800"> -->
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="titleFont"><span class="w3-padding "><b>Selamat datang <?php echo $name; ?>!</b></span></h1>
	<br/>
	<span class="titleWelcoming w3-hide-small w3-text-light-grey">Mari bergabung dalam serangkaian permainan ketangkasan otak berikut ini.</span>
  </div>
</header>

<div class="w3-container petunjuk">
	<div class="w3-full">
		<span class="petunjukTitle">Petunjuk Utama (<b>WAJIB DIBACA</b> sebelum mulai):</span>
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

<!-- Contact Section -->
  <div class="w3-container w3-padding-32 interlude" id="contact">
    <h3 class=" w3-padding-16"></h3>
  </div>

<div class="w3-container gamelist">
  
<div class="w3-cell-row">
  <div class="w3-container w3-cell">
	<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 gameTitle">Permainan A</h3>
<?php
    // Check if the game is available
    $qry ="SELECT game1_end
             FROM account
            WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game1_end'] != null ? "N" : "Y";
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
	<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 gameTitle">Permainan B</h3>
    <?php
    // Check if the game is available
    $qry ="SELECT game1_end, game2_end
			 FROM account
            WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game2_end'] != null ? "N" : "Y";
	  $game1        = $r['game1_end'] != null ? "N" : "Y";
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


<div class="w3-container gamelist">
<div class="w3-cell-row">
  <div class="w3-container w3-cell">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 gameTitle">Permainan C</h3>
<?php
    // Check if the game is available
    $qry ="SELECT game2_end, game3_end
        FROM account
         WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game3_end'] != null ? "N" : "Y";
      $game2  = $r['game2_end'] != null ? "N" : "Y";
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
	<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 gameTitle">Permainan D</h3>
    <?php
    // Check if the game is available
    $qry ="SELECT game3_end, game4_end
        FROM account
         WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game4_end'] != null ? "N" : "Y";
      $game3  = $r['game3_end'] != null ? "N" : "Y";
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

<div class="w3-container gamelist">
<div class="w3-cell-row">
  <div class="w3-container w3-cell">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 gameTitle">Permainan E</h3>
<?php
    // Check if the game is available
    $qry ="SELECT game4_end, game5_end
        FROM account
         WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game5_end'] != null ? "N" : "Y";
      $game4  = $r['game4_end'] != null ? "N" : "Y";
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
	<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 gameTitle">Permainan F</h3>
    <?php
    // Check if the game is available
    $qry ="SELECT game5_end, game6_end
        FROM account
         WHERE id =".$login_session;
         
    $result = $db->query($qry);// or die(mysql_error());
    
    while($r = mysqli_fetch_array($result))
    {
      $isavailable  = $r['game6_end'] != null ? "N" : "Y";
      $game5  = $r['game5_end'] != null ? "N" : "Y";
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
  <div class="w3-container w3-padding-32 interlude2" id="contact">
    <h3 class="light-grey w3-padding-5"></h3>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="light-grey w3-padding-16 thankyoufont"><i>Terima kasih atas partisipasi kamu!</i></h3>
  </div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center footer">
  <i class="fa fa-copyright" aria-hidden="true"></i>copyright reserverd 2020 - Developed by FINNIX
</footer>

</body>
</html>
