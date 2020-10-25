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
	  
	.button {
    margin-left:20px;
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
		<iframe width="650" height="415" src="https://www.youtube.com/embed/2ZXmK7G9AjE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<!-- <div class="w3-full">
		<span class="petunjukTitle">Petunjuk Utama (<b>WAJIB DIBACA</b> sebelum mulai):</span>
		<ol>
			<li>Buatlah file word baru di desktop kamu dan beri nama : <b>SPPAS_Nama lengkap siswa_Kelas</b> untuk menyimpan dokumentasi selama penugasan berlangsung.</li>
			<li>Baca dan pahami terlebih dahulu Petunjuk Umum ini, lalu tekan tombol Register Braingymmer untuk mendaftar di website braingymmer. Gunakan email sekolah kamu dan buat password (bebas) untuk register.</li>
			<li>Kamu hanya diberikan satu kali kesempatan dalam setiap permainan, jadi bermainlah sebaik dan secepat yang kamu bisa sampai selesai.</li>
			<li>Setelah terdaftar di website braingymmer, kamu harus langsung logout dari website braingymmer.</li>
			<li>Silahkan kembali ke website SPPAS, pilih permainan A. Kemudian saat akan mulai bermain tekan tombol Mulai Permainan maka kamu langsung diarahkan ke website braingymmer.</li>
			<li>Kamu dapat langsung mulai bermain (tanpa perlu login ke website braingymmer), tapi setiap kali selesai bermain, kamu harus login untuk dapat melihat skor kamu. Bermainlah secara berurutan sesuai dengan urutan huruf (A sampai E) dengan mengikuti alur seperti pada petunjuk nomor 8.</li>
			<li>Setiap kali selesai bermain, kamu harus login ke website braingymmer untuk dapat melihat skor kamu, lalu dokumentasikan skor kamu dengan cara print screen tampilan skor kamu pada permainan tersebut. Lalu paste di file word SPPAS kamu dan pilih menu file-save.
				<br />Cara print screen :
				<ul>
					<li>*Pengguna Windows: Tekan tombol print screen pada keyboard kamu, lalu paste di file word SPPAS kamu dengan menekan tombol Ctrl dan V secara bersamaan pada keyboard kamu. </li>
          <li>*Pengguna Macbook: Tekan tombol Command, Shift dan 3, pada keyboard kamu Jika sudah, maka hasil print screen kamu sudah otomatis langsung tersimpan di desktop kamu. Selanjutnya kamu perlu copy hasil print screen tersbut dan paste gambar tersebut di file word SPPAS kamu. </li>
        </ul>
				<img src="images/prtsc.jpg" style="width:350px; height:350px;"/>
			</li>
			<li>Setelah menyimpan print screen skor kamu, ingat, kamu harus logout dari website braingymmer. Lalu kembali ke halaman website SPPAS dan menekan tombol Selesai Permainan untuk melanjutkan ke permainan B.
			<br/>Begini alurnya: 
				<ol type="a">
					<li>tekan tombol Mulai Permainan pada website SPPAS, lalu bermainlah (tanpa login ke website braingymmer)</li>
					<li>Selesai bermain, login ke website braingymmer untuk dapat melihat dan print screen hasil skor permainannya</li>
					<li>logout dari website braingymmer dan tekan tombol Selesai Permainan pada website SPPAS untuk dapat melanjutkan bermain ke permainan berikutnya.</li>
					<li>Ulangi alur yang sama untuk permainan B,C,D dan E.</li>
				</ol>
			</li>
			<li>Untuk permainan F (Rush Hour), kamu akan bermain sebanyak 3 kali mulai dari tingkat kesulitan easy, medium, lalu hard. Setiap kali berhasil menyelesaikan satu level permainan, segera print screen, kemudian paste di file word SPPAS kamu. 
          Tetaplah tinggal di dalam permainan Rush Hour setelah kamu menyelesaikan satu level permainan, untuk selanjutnya bermain pada level berikutnya.
			</li>
			<li>Silahkan menyimak video tutorial berikut ini agar semakin jelas alur bermain dan cara mendokumentasikan (print screen) skor kamu pada setiap permainan. </li>
			<li>Mintalah bantuan orang tua untuk mengambil foto sebanyak tiga kali sewaktu kamu sedang mengerjakan penugasan permainan ini (bebas pada permainan apa saja). Lalu simpanlah juga tiga foto tersebut ke dalam file word SPPAS kamu.</li>
			<li>Langkah terakhir, periksa kembali file word SPPAS kamu, pastikan ada 11 foto yang terdiri dari: masing-masing satu foto untuk Permainan A sampai E (total lima foto), tiga foto untuk Permainan F dan tiga foto sewaktu kamu mengerjakan penugasan permainan ini.</li>
			<li>Setelah lengkap seluruhnya, sekarang waktunya untuk unggah file word SPPAS kamu ke dalam <b>Google Classroom : Project Atensi Siswa SD KK 1 atau Project Atensi Siswa SD KK 3 (sesuai dengan asal sekolah kamu masing-masing)</b>. Selamat, kamu sudah menyelesaikan penugasan permainan ini. Terima kasih.</li>
		</ol> 
	</div> -->
</div>

<!-- Contact Section -->
  <div class="w3-container w3-padding-32 interlude" id="contact">
	<div class="w3-container w3-cell">
		<form action="https://www.braingymmer.com/en/register/" target="_blank">
			<button type="submit" class="w3-button w3-blue button">Register BrainGymmer</button>
		</form>
	</div>
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
