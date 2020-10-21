<?php
	include("session.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Games - Agreement</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="images/logo4.jpg" />
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	
	<link href="plugins/toastr/css/toastr.min.css" rel="stylesheet">  

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Coming+Soon&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dekko&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">



  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="plugins/toastr/js/toastr.min.js"></script>
	
    <style>
      html, body {
      background-image: url("images/bg1.png");
      /* Full height */
      height: 100%;
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: repeat;
      background-size: cover;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: 'Coming Soon', cursive;
      font-size: 20px;
      color: #eee;
      }
      h2 {
      margin: 0 0 0 8px;
	  text-transform: uppercase;
      font-weight: 400;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 25px;
      height: 100%;
  position: relative;
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-gamepad {
      font-size: 72px;
	  color: black;
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: #85d6de; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
	  cursor: pointer;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }

.dv_form{
  position:absolute;
  top:20%;
 background-color: #546f70;
  border-radius: 5px;
  border:15px solid #ffd065;
  margin-bottom: 60px;
  margin-left: 15%;
  margin-right: 15%;
}
.btn_login{
  color: rgb(175,238,238);
}

.dv_adminlogin {
  background-color: rgb(255 231 112);
  color: rgb(250,250,210);
  border: 10px solid #ff9494;
  margin:10px;
  border-radius: 25px;
}
.w3-dropdown-click:hover{
  background-color:white!important;
}
.w3-dropdown-click{
  color:black!important;
}

      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
   /*   .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }*/
      }
	  
div#scroll {
	height: 500px;
	overflow-Y: scroll;
}
   .footer{
      background-color: #9df2e6;
      color:white;
      width: 100%;
  height: 50px;
    position: absolute;
  bottom: 0;
  left: 0;
    }


    </style>
  </head>
  <body>
<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	set_time_limit(0);

	$parent_name = $_POST['parent_name'];
	$parent_age = $_POST['parent_age'];
	
	date_default_timezone_set('Asia/Bangkok');
	$date = date("Y-m-d G:i:s");

	// Insert data
	if (isset($_POST['btnAgree']))
	{
		$query="UPDATE account 
				   SET parent_name = '".$parent_name."',
				       parent_age  = ".$parent_age.",
					   consent     = 'Y'
				 WHERE id = ".$login_session;
				 
		$result = $db->query($query);
									  
		if ($result === TRUE) 
		{	
			echo "<script>";
			echo "window.open('menu.php', '_SELF');";
			echo "</script>";
		}
	}
?>

<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#" class="w3-bar-item"><img src="images/logo3.jpg" style="width:150px; height:50px;"></a>
  </div>
</div>

    <div class="main-block">
        <div class="dv_form">
		  <!--<div style="text-align: center;padding:50px;">
           <img src="images/logo4.jpg" style="width:150px; height:150px;"><br />
           <b>S</b>kala <b>P</b>enilaian <b>P</b>erilaku <b>A</b>tentif <b>S</b>iswa
          </div>-->
          <form method="post">
			<h1>Prolog Singkat</h1>
			<div> <!-- id="scroll" -->
				<p>Salam sejahtera dan sehat selalu.</p><br/>
				<p>Perkenalkan, saya Antania Djuwita, mahasiswi Magister Psikologi Profesi bidang Psikologi Pendidikan dari Universitas Tarumanagara (Untar), Jakarta (NPM: 717191027). Saya sedang melakukan penelitian dengan topik Pengembangan Skala Penilaian Perilaku Atentif Siswa (SPPAS).  Saya bekerja sama dengan SDK Ketapang 1 (Jakarta) dan SDK Ketapang 3 (Cibubur) serta memperoleh ijin seorang pakar atensi (konsentrasi) dari salah satu klinik tumbuh kembang anak di Jakarta.</p>
				<br/>
				<p>Besar harapan saya, kiranya Ayah/Bunda berkenan mengizinkan putra/putrinya untuk  berpartisipasi dalam penelitian ini.  Bentuk partisipasi putra/putri Ayah/Bunda adalah dengan cara, Penugasan Siswa (selama ±60 menit). Tugas yang dikerjakan berupa enam buah permainan ketangkasan otak secara virtual yang akan dipandu dalam website SPPAS ini. Partisipasi putra/putri dalam penelitian ini akan menjadi pengalaman berharga dan memperluas wawasan mengenai berbagai tugas yang memerlukan perhatian penuh. Hasil penelitian ini bermanfaat bagi pengembangan ilmu di bidang Psikologi Pendidikan.</p>
				<br/>
				<p>Peneliti menjamin kerahasiaan identitas dan jawaban putra/putri Ayah/Bunda, karena hasil pengerjaan tugas sepenuhnya <b>hanya</b> digunakan untuk kepentingan penelitian.</p>
				<br/>
				<p>Apabila Ayah/Bunda berkenan mengizinkan putra/putrinya turut berpartisipasi dalam penelitian ini, saya mohon kesediaan Ayah/Bunda untuk melengkapi data diri, dan mengklik pernyataan “Ya, saya setuju” di bagian bawah halaman ini. Partisipasi ini bersifat sukarela sehingga Ayah/Bunda berhak mengurungkan niat untuk berpartisipasi tanpa konsekuensi apapun.</p>
				<p>Apabila ada hal-hal yang ingin ditanyakan berkaitan dengan penelitian ini, Ayah/Bunda dapat menghubungi saya di alamat email antania.717191027@stu.untar.ac.id. Apabila Ayah/Bunda bermaksud mengetahui hasil penelitian ini di kemudian hari, Ayah/Bunda dapat menghubungi pihak sekolah, karena hasil penelitian akan saya sampaikan kepada pihak sekolah. Terima kasih atas kesediaan Ayah/Bunda untuk berpartisipasi dalam penelitian ini.</p>
				<br/>
			</div>
			<br/>
			<h1>Informed Consent Orang tua</h1>
			<p>Saya, <input type="text" id="parent_name" name="parent_name" style="width:450px;" placeholder="(diisi nama orang tua/wali)" required />, usia: 
			   <input type="text" id="parent_age" name="parent_age" style="width:100px;" required />tahun,</p> 
			<p>selaku orang tua/wali dari <b><?php echo $user_check; ?></b>, bahwa saya memahami penjelasan penelitian, dan saya bersedia untuk berpartisipasi dalam penelitian dengan topik Pengembangan Skala Penilaian Perilaku Atentif Siswa (SPPAS) yang dilaksanakan oleh Antania Djuwita dari Untar.</p>
			<button type="submit" id="btnAgree" class="btn btn-success" name="btnAgree">Saya setuju</button>
          </form>
        </div>

    </div>
    
  </body>
</html>