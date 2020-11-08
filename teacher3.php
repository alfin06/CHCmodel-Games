<?php
	include("config.php");
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Survey</title>
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
      background-repeat: repeat;
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
	
	h3 {
	  padding: 0;
      margin: 0;
      outline: none;
      font-family: "Comic Sans MS", cursive, sans-serif;
      color: black;
	  text-decoration: underline;
	}
	
	button {
		cursor: pointer; 
	 }
	 .dv_tableresult{
	 	background-color: #ff5f5f;
		  border-radius: 25px;
		  border:10px solid #ffd065;
		  font-size: 16px;
	 }

	 .title{
	 	text-align: center;
	 	font-size: 30px;
	 	 font-family: "Comic Sans MS", cursive, sans-serif;
	 }
	 
	 .form-control{
		width: 35%;
	 }

	 @media (max-width: 700px) {
 .form-control{
		width: 90%;
	 }
}
    </style>
  </head>
  <body>
  <?php
	date_default_timezone_set('Asia/Bangkok');
	$date = date("Y-m-d G:i:s");

	// Insert data
	if (isset($_POST['insert']))
	{	
		$result = $db->query("INSERT INTO survey(signup_date, name, grade, student_name, email, phone, question1, question2, question3, question4, 
												 question5, question6, question7, question8, question9, question10, question11, question12, question13,
												 question14, question15, question16, question17, question18, question19, question20,
												 question21, question22, question23,
												 question24, question25, question26, question27, question28, question29, question30, question31, question32, question33,
												 question34, question35)
									  VALUES ('".$date."', '".$_POST['name']."', '".$_POST['grade']."', '".$_POST['student']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['question1']."', '".$_POST['question2']."', '".$_POST['question3']."', '".$_POST['question4']."', '".$_POST['question5']."', '".$_POST['question6']."', '".$_POST['question7']."', '".$_POST['question8']."', '".$_POST['question9']."', '".$_POST['question10']."', '".$_POST['question11']."', '".$_POST['question12']."', '".$_POST['question13']."', '".$_POST['question14']."', '".$_POST['question15']."', '".$_POST['question16']."', '".$_POST['question17']."', '".$_POST['question18']."', '".$_POST['question19']."', '".$_POST['question20']."', '".$_POST['question21']."', '".$_POST['question22']."', '".$_POST['question23']."', '".$_POST['question24']."', '".$_POST['question25']."', '".$_POST['question26']."', '".$_POST['question27']."', '".$_POST['question28']."', '".$_POST['question29']."', '".$_POST['question30']."', '".$_POST['question31']."', '".$_POST['question32']."', '".$_POST['question33']."', '".$_POST['question34']."', '".$_POST['question35']."')");
									  
		if ($result === TRUE) 
		{
			echo "<script>";
			$_SESSION['done'] = "Y";
			echo "window.open('teacher.php', '_SELF');";
			echo "</script>";
		}
		else
		{
			echo "<script>";
			echo "alert('ERROR! Mohon menghubungi owner website/developer.');";
			$_SESSION['done'] = "N";
			echo "</script>";
		}
	}
  ?>
	<div class="w3-top">
		<div class="w3-bar w3-white w3-wide w3-padding w3-card">
			<a href="#" class="w3-bar-item"><img src="images/logo3.jpg" style="width:150px; height:50px;"></a>
		</div>
	</div>
  
    <!-- Page content -->
	<form method="POST" id="screen1" style="display: block;">
	<div class="w3-content w3-padding" style="max-width:1564px; margin-top: 20px;">
	  <br/><br/>
	  <div class="w3-container w3-padding-32 w3-margin-32" id="projects">
		<h3>Skala Penilaian Guru</h3>
		<br />
		<p>
			Salam sejahtera bagi kita semua. Perkenalkan, saya Antania Djuwita, mahasiswi Magister Psikologi Profesi Bidang Peminatan Psikologi Pendidikan dari Universitas Tarumanagara (Untar),Jakarta. Saat ini saya sedang menyusun penelitian dengan tema pengembangan Skala Penilaian Perilaku Atentif Siswa. Partisipasi bapak/ ibu guru akan sangat bermanfaat untuk pengembangan dan kemajuan bidang psikologi pendidikan.
		</p><br />
		<p>Hormat saya,</p>
		<p>Antania Djuwita</p>
		<p>email: antania.717191027@stu.untar.ac.id</p>
		<p>WA: +6281807149296</p>
	  </div>

	  <div class="w3-container w3-padding-32 w3-margin-32" id="projects">
		<h3>Penjelasan Penelitian</h3>
		<br />
		<p>
			Saya mengharapkan kesediaan bapak/ibu untuk berpartisipasi dengan cara mengisi 
			Skala Penialaian Guru yang terdiri dari 35 butir pernyataan terkait perilaku 
			inatentif siswa dalam konteks belajar sehari-hari. Saya menjamin kerahasiaan 
			identitas dan jawaban bapak/ibu, karena hasil jawaban sepenuhnya hanya digunakan 
			untuk kepentingan penelitian.
		</p><br />
		<p>Apabila bapak/ibu berkenan berpartisipasi dalam penelitian ini, saya meminta kesedian 
		   bapak/ibu untuk melengkapi data diri dan memberikan persetujuan pada pilihan "bersedia".
		</p>
	  </div>
	  
	  <div class="w3-container w3-padding-64 w3-margin-16" id="projects">
		<h3>Data Diri</h3>
		<br />
		<form>
		  <div class="form-group">
			<label for="name">Nama lengkap guru</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Tahun lalu mengajar kelas</label>
			<select class="form-control" id="grade" name="grade" required>
				<option value="" disabled selected>Pilih kelas</option>
				<option value="SD Kelas 3">SD Kelas 3</option>
				<option value="SD Kelas 4">SD Kelas 4</option>
				<option value="SD Kelas 5">SD Kelas 5</option>
				<option value="SD Kelas 6">SD Kelas 6</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="name">Nama lengkap siswa yang diberi penilaian</label>
			<select class="form-control" id="student" name="student" required>
				<option value="" disabled selected>Pilih siswa</option>
				<?php
					$qry ="SELECT DISTINCT name
							 FROM account
							WHERE consent = 'Y'
							ORDER BY name ASC";
							 
					$result = $db->query($qry);// or die(mysql_error());
					
					while($r = mysqli_fetch_array($result))
					{
						echo "<option value='".$r['name']."'>";
						echo $r['name'];
						echo "</option>";
					}
				?>
			</select>
		  </div>
		  <div class="form-group">
			<label for="name">Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="">
		  </div>
		  <div class="form-group">
			<label for="name">No. handphone</label>
			<input type="text" class="form-control" id="phone" name="phone" placeholder="">
		  </div>
		  <div class="form-group">
			<div style="float:left;">
		    	<input type="checkbox" id="bersedia" name="bersedia" style="float:left; width:25px; height:25px;" required>
			</div>
			<div>
				<p>
				Saya sudah memahami penjelasan penelitian. Saya, dengan penuh kesadaran dan tanpa paksaan 
				dari pihak manapun, bersedia untuk berpartisipasi dalam penelitian dengan tema Pengembangan 
				Skala Penilaian Perilaku Atentif Siswa yang dilaksanakan oleh Antania Djuwita dari Untar. 
				Apabila di kemudian hari saya mengundurkan diri dari penelitian ini, maka saya tidak akan 
				dituntut apapun.
				</p>
			</div>
		  </div>
		</form>
	  </div>

	  <div class="w3-row-padding">
		<div class="w3-col m12 w3-margin-bottom">
		  <div class="w3-display-container" style="overflow-x:auto;">
		    <p>
			Berikut ini terdapat 35 butir pernyataan perilaku terkait masalah atensi yang umumnya 
			terjadi pada siswa dalam belajar. Pikirkan dan ingatlah kembali pengalaman anda dengan 
			siswa yang akan anda berikan penilaian, sehubungan dengan kemampuan atensinya. 
			Silahkan isi tiap butir menurut perilaku siswa tersebut dengan cara memberi tanda (.) pada 
			salah satu pilihan jawaban yang menurut anda paling tepat menggambarkan perilaku siswa tersebut. 
			Jika sangat jarang, anda dapat memberi tanda (.) pada angka 1, kadang-kadang pada angka 2, 
			sering pada angka 3 dan sangat sering pada nomor 4. Pastikan anda mengisi semua butir dengan lengkap.
			</p>
		  </div>
		</div>
	  </div>

	  <!-- Project Section -->
	  <div class="w3-row-padding">
		<div class="w3-col m12 w3-margin-bottom">
		  <div class="w3-display-container" style="overflow-x:auto;">
			<table class="w3-table-all w3-hoverable dv_tableresult ">
				<thead>
					<tr class="w3-pale-yellow">
						<th>No.</th>
						<th>Perilaku Anak</th>
						<th>Sama sekali tidak (sangat jarang)</th>
						<th>Kadang-kadang</th>
						<th>Sering</th>
						<th>Selalu</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1.</td>
						<td>Kesulitan untuk mempertahankan perhatian pada saat melaksanakan tugas yang menuntut berpikir,
							 seperti menalar, mengingat, ketelitian, keakuratan.</td>
						<td><input type="radio" value="1" name="question1" required /></td>
						<td><input type="radio" value="2" name="question1" /></td>
						<td><input type="radio" value="3" name="question1" /></td>
						<td><input type="radio" value="4" name="question1" /></td>
					</tr>
					<tr>
						<td>2.</td>
						<td>Berlari-lari atau memanjat secara berlebihan pada situasi yang tidak sesuai untuk hal tersebut.</td>
						<td><input type="radio" value="1" name="question2" required /></td>
						<td><input type="radio" value="2" name="question2" /></td>
						<td><input type="radio" value="3" name="question2" /></td>
						<td><input type="radio" value="4" name="question2" /></td>
					</tr>
					<tr>
						<td>3.</td>
						<td>Tidak mampu menyelesaikan pekerjaan yang sudah dimulai, khususnya yang menuntut kecakapan
							berpikir seperti menalar, mengingat, ketelitian dan keakuratan.</td>
						<td><input type="radio" value="1" name="question3" required /></td>
						<td><input type="radio" value="2" name="question3" /></td>
						<td><input type="radio" value="3" name="question3" /></td>
						<td><input type="radio" value="4" name="question3" /></td>
					</tr>
					<tr>
						<td>4.</td>
						<td>Tidak mampu memberi perhatian kepada hal-hal kecil, khususnya dalam pengerjaan tugas atau
							kegiatan lainnya yang menuntut ketelitian sehingga cenderung ceroboh.</td>
						<td><input type="radio" value="1" name="question4" required /></td>
						<td><input type="radio" value="2" name="question4" /></td>
						<td><input type="radio" value="3" name="question4" /></td>
						<td><input type="radio" value="4" name="question4" /></td>
					</tr>
					<tr>
						<td>5.</td>
						<td>Ketika berada dalam suatu percakapan cenderung tidak memperhatikan lawan bicara.</td>
						<td><input type="radio" value="1" name="question5" required /></td>
						<td><input type="radio" value="2" name="question5" /></td>
						<td><input type="radio" value="3" name="question5" /></td>
						<td><input type="radio" value="4" name="question5" /></td>
					</tr>
					<tr>
						<td>6.</td>
						<td>Membutuhkan waktu tambahan dalam pengerjaan tugas seperti mencatat, menyalin dan mengerjakan soal.</td>
						<td><input type="radio" value="1" name="question6" required /></td>
						<td><input type="radio" value="2" name="question6" /></td>
						<td><input type="radio" value="3" name="question6" /></td>
						<td><input type="radio" value="4" name="question6" /></td>
					</tr>
					<tr>
						<td>7.</td>
						<td>Kemampuan sosialisasi buruk.</td>
						<td><input type="radio" value="1" name="question7" required /></td>
						<td><input type="radio" value="2" name="question7" /></td>
						<td><input type="radio" value="3" name="question7" /></td>
						<td><input type="radio" value="4" name="question7" /></td>
					</tr>
					<tr>
						<td>8.</td>
						<td>Mudah lupa hal-hal yang telah dipelajari. </td>
						<td><input type="radio" value="1" name="question8" required /></td>
						<td><input type="radio" value="2" name="question8" /></td>
						<td><input type="radio" value="3" name="question8" /></td>
						<td><input type="radio" value="4" name="question8" /></td>
					</tr>
					<tr>
						<td>9.</td>
						<td>Menghindari, enggan, atau mengalami kesulitan melaksanakan tugas-tugas yang membutuhkan ketekunan seperti menyelesaikan pekerjaan sekolah atau pekerjaan rumah.</td>
						<td><input type="radio" value="1" name="question9" required /></td>
						<td><input type="radio" value="2" name="question9" /></td>
						<td><input type="radio" value="3" name="question9" /></td>
						<td><input type="radio" value="4" name="question9" /></td>
					</tr>
					<tr>
						<td>10.</td>
						<td>Membutuhkan bimbingan penuh untuk dapat menyelesaikan tugas yang menuntut untuk berpikir dan ketekunan.</td>
						<td><input type="radio" value="1" name="question10" required /></td>
						<td><input type="radio" value="2" name="question10" /></td>
						<td><input type="radio" value="3" name="question10" /></td>
						<td><input type="radio" value="4" name="question10" /></td>
					</tr>
					<tr>
						<td>11.</td>
						<td>Mengalami kesulitan untuk bermain atau melaksanakan kegiatan dengan tenang di waktu senggang.</td>
						<td><input type="radio" value="1" name="question11" required /></td>
						<td><input type="radio" value="2" name="question11" /></td>
						<td><input type="radio" value="3" name="question11" /></td>
						<td><input type="radio" value="4" name="question11" /></td>
					</tr>
					<tr>
						<td>12.</td>
						<td>Mudah terstimulus atau 'terpancing' sehingga bertindak impulsif (bertindak tanpa berpikir).</td>
						<td><input type="radio" value="1" name="question12" required /></td>
						<td><input type="radio" value="2" name="question12" /></td>
						<td><input type="radio" value="3" name="question12" /></td>
						<td><input type="radio" value="4" name="question12" /></td>
					</tr>
					<tr>
						<td>13.</td>
						<td>Melontarkan jawaban secara terburu-buru terhadap pertanyaan yang belum selesai ditanyakan.</td>
						<td><input type="radio" value="1" name="question13" required /></td>
						<td><input type="radio" value="2" name="question13" /></td>
						<td><input type="radio" value="3" name="question13" /></td>
						<td><input type="radio" value="4" name="question13" /></td>
					</tr>
					<tr>
						<td>14.</td>
						<td>Meninggalkan tempat duduk di kelas atau situasi lain di mana diharapkan untuk tetap duduk diam.</td>
						<td><input type="radio" value="1" name="question14" required /></td>
						<td><input type="radio" value="2" name="question14" /></td>
						<td><input type="radio" value="3" name="question14" /></td>
						<td><input type="radio" value="4" name="question14" /></td>
					</tr>
					<tr>
						<td>15.</td>
						<td>Mengalami kesulitan untuk antri atau menunggu giliran dalam bermain atau situasi kelompok.</td>
						<td><input type="radio" value="1" name="question15" required /></td>
						<td><input type="radio" value="2" name="question15" /></td>
						<td><input type="radio" value="3" name="question15" /></td>
						<td><input type="radio" value="4" name="question15" /></td>
					</tr>
					<tr>
						<td>16.</td>
						<td>Perhatian mudah terpecah atau terbagi ke hal lain yang bukan merupakan fokus utama. </td>
						<td><input type="radio" value="1" name="question16" required /></td>
						<td><input type="radio" value="2" name="question16" /></td>
						<td><input type="radio" value="3" name="question16" /></td>
						<td><input type="radio" value="4" name="question16" /></td>
					</tr>
					<tr>
						<td>17.</td>
						<td>Mudah tersinggung dan merasa terganggu oleh orang lain.</td>
						<td><input type="radio" value="1" name="question17" required /></td>
						<td><input type="radio" value="2" name="question17" /></td>
						<td><input type="radio" value="3" name="question17" /></td>
						<td><input type="radio" value="4" name="question17" /></td>
					</tr>
					<tr>
						<td>18.</td>
						<td>Kesulitan dalam menyelesaikan tugas, khususnya menuntut untuk berpikir, ketekunan dan ketelitian dengan baik, tanpa bantuan orang lain.</td>
						<td><input type="radio" value="1" name="question18" required /></td>
						<td><input type="radio" value="2" name="question18" /></td>
						<td><input type="radio" value="3" name="question18" /></td>
						<td><input type="radio" value="4" name="question18" /></td>
					</tr>
					<tr>
						<td>19.</td>
						<td>Terkendala untuk menyelesaikan tugas tepat pada waktunya, lebih dikarenakan kesulitan mempertahankan perhatian sewaktu mengerjakannya. </td>
						<td><input type="radio" value="1" name="question19" required /></td>
						<td><input type="radio" value="2" name="question19" /></td>
						<td><input type="radio" value="3" name="question19" /></td>
						<td><input type="radio" value="4" name="question19" /></td>
					</tr>
					<tr>
						<td>20.</td>
						<td>Kesulitan untuk mengikuti perintah maupun instruksi yang berjenjang.</td>
						<td><input type="radio" value="1" name="question20" required /></td>
						<td><input type="radio" value="2" name="question20" /></td>
						<td><input type="radio" value="3" name="question20" /></td>
						<td><input type="radio" value="4" name="question20" /></td>
					</tr>
					<tr>
						<td>21.</td>
						<td>Perhatiannya mudah beralih ketika diberi petunjuk untuk mengerjakan sesuatu.</td>
						<td><input type="radio" value="1" name="question21" required /></td>
						<td><input type="radio" value="2" name="question21" /></td>
						<td><input type="radio" value="3" name="question21" /></td>
						<td><input type="radio" value="4" name="question21" /></td>
					</tr>
					<tr>
						<td>22.</td>
						<td>Perhatian mudah teralihkan oleh hal-hal lain seperti suara atau objek lain yang bergerak.</td>
						<td><input type="radio" value="1" name="question22" required /></td>
						<td><input type="radio" value="2" name="question22" /></td>
						<td><input type="radio" value="3" name="question22" /></td>
						<td><input type="radio" value="4" name="question22" /></td>
					</tr>
					<tr>
						<td>23.</td>
						<td>Cenderung ceroboh dan tidak teliti sewaktu mengerjakan tugas, khususnya yang menuntut untuk
							berpikir, mengingat, ketelitian dan merespon dengan cepat.</td>
						<td><input type="radio" value="1" name="question23" required /></td>
						<td><input type="radio" value="2" name="question23" /></td>
						<td><input type="radio" value="3" name="question23" /></td>
						<td><input type="radio" value="4" name="question23" /></td>
					</tr>
					<tr>
						<td>24.</td>
						<td>Tidak pernah bisa diam, tidak mengenal lelah.</td>
						<td><input type="radio" value="1" name="question24" required /></td>
						<td><input type="radio" value="2" name="question24" /></td>
						<td><input type="radio" value="3" name="question24" /></td>
						<td><input type="radio" value="4" name="question24" /></td>
					</tr>
					<tr>
						<td>25.</td>
						<td>Kehilangan benda-benda yang diperlukan untuk menyelesaikan tugas atau kegiatan lain antara lain: alat tulis, buku, mainan.</td>
						<td><input type="radio" value="1" name="question25" required /></td>
						<td><input type="radio" value="2" name="question25" /></td>
						<td><input type="radio" value="3" name="question25" /></td>
						<td><input type="radio" value="4" name="question25" /></td>
					</tr>
					<tr>
						<td>26.</td>
						<td>Kesulitan untuk menyimak percakapan dengan lawan bicara.</td>
						<td><input type="radio" value="1" name="question26" required /></td>
						<td><input type="radio" value="2" name="question26" /></td>
						<td><input type="radio" value="3" name="question26" /></td>
						<td><input type="radio" value="4" name="question26" /></td>
					</tr>
					<tr>
						<td>27.</td>
						<td>Tidak mampu menyelesaikan tugas yang diberikan, terutama tugas yang menuntut untuk berpikir, bernalar, mengingat dan merespon dengan segera seperti mencongak, dikte, membaca bergiliran.</td>
						<td><input type="radio" value="1" name="question27" required /></td>
						<td><input type="radio" value="2" name="question27" /></td>
						<td><input type="radio" value="3" name="question27" /></td>
						<td><input type="radio" value="4" name="question27" /></td>
					</tr>
					<tr>
						<td>28.</td>
						<td>Cenderung selalu dalam keadaan "siap gerak" atau aktivitasnya seperti digerakkan oleh mesin.</td>
						<td><input type="radio" value="1" name="question28" required /></td>
						<td><input type="radio" value="2" name="question28" /></td>
						<td><input type="radio" value="3" name="question28" /></td>
						<td><input type="radio" value="4" name="question28" /></td>
					</tr>
					<tr>
						<td>29.</td>
						<td>Sulit dikendalikan pada saat di tempat umum.</td>
						<td><input type="radio" value="1" name="question29" required /></td>
						<td><input type="radio" value="2" name="question29" /></td>
						<td><input type="radio" value="3" name="question29" /></td>
						<td><input type="radio" value="4" name="question29" /></td>
					</tr>
					<tr>
						<td>30.</td>
						<td>Menyela atau memaksakan diri terhadap orang lain (misalnya memotong, "menyelak" percakapan atau menganggu jalannya sebuah permainan).</td>
						<td><input type="radio" value="1" name="question30" required /></td>
						<td><input type="radio" value="2" name="question30" /></td>
						<td><input type="radio" value="3" name="question30" /></td>
						<td><input type="radio" value="4" name="question30" /></td>
					</tr>
					<tr>
						<td>31.</td>
						<td>Usil, mengganggu siswa lain di dalam kelas.</td>
						<td><input type="radio" value="1" name="question31" required /></td>
						<td><input type="radio" value="2" name="question31" /></td>
						<td><input type="radio" value="3" name="question31" /></td>
						<td><input type="radio" value="4" name="question31" /></td>
					</tr>
					<tr>
						<td>32.</td>
						<td>Terlalu aktif atau aktivitasnya berlebihan.</td>
						<td><input type="radio" value="1" name="question32" required /></td>
						<td><input type="radio" value="2" name="question32" /></td>
						<td><input type="radio" value="3" name="question32" /></td>
						<td><input type="radio" value="4" name="question32" /></td>
					</tr>
					<tr>
						<td>33.</td>
						<td>Kesulitan mengikuti instruksi sehingga gagal untuk menyelesaikan tugas sekolah, bukan karena tingkah laku atau sikap menentang atau tidak memahami instruksi.</td>
						<td><input type="radio" value="1" name="question33" required /></td>
						<td><input type="radio" value="2" name="question33" /></td>
						<td><input type="radio" value="3" name="question33" /></td>
						<td><input type="radio" value="4" name="question33" /></td>
					</tr>
					<tr>
						<td>34.</td>
						<td>Tidak bisa duduk diam (kaki dan tangannya tidak bisa diam, atau selalu bergerak).</td>
						<td><input type="radio" value="1" name="question34" required /></td>
						<td><input type="radio" value="2" name="question34" /></td>
						<td><input type="radio" value="3" name="question34" /></td>
						<td><input type="radio" value="4" name="question34" /></td>
					</tr>
					<tr>
						<td>35.</td>
						<td>Melamun atau memikirkan hal lain pada saat mengerjakan tugas.</td>
						<td><input type="radio" value="1" name="question35" required /></td>
						<td><input type="radio" value="2" name="question35" /></td>
						<td><input type="radio" value="3" name="question35" /></td>
						<td><input type="radio" value="4" name="question35" /></td>
					</tr>
				</tbody>
			</table>
		  </div>
		</div>
	  </div>
	  <div class="w3-row-padding">
		<div class="w3-col m12 w3-margin-bottom">
			<button type="submit" id="insert" name="insert" class="btn btn-success">Submit</button>
		</div>
	  </div>

	<!-- End page content -->
	
	  <!--<div class="w3-row-padding w3-padding-32">
		<p><small><i>
			Cutoff Score:<br/>
			Pemeriksa Orang tua	> 30<br/>
			Pemeriksa Guru	    > 29<br/>
			Pemeriksa Dokter	> 22
		</p></small></i>
		<p><small><i>
			Catatan: Anak dengan skor SPPAHI lebih besar dari Cutoff Score dinyatakan sebagai berisiko tinggi mengalami Gangguan pemusatan Perhatian/ Hiperaktivitas (GPPH) atau Attention Deficit Hyperactivity Disorder (ADHD). Anak yang berisiko tinggi dianjurkan untuk segera dilakukan pemeriksaan lebih lanjut sesuai dengan prosedur pemeriksaan anak dengan GPPH. 
		</i></small></p>
	  </div>-->
	</div>
	</form>
	
	<form id="screen2" style="display: none;">
	<div class="w3-content w3-padding" style="max-width:1564px; margin-top: 150px;">
		<h2>Terima kasih atas partisipasinya. Saya sangat mengapresiasi tanggapan bapak/ibu.
			Kemajuan pendidikan berawal dari semangat guru-guru penggerak.</h2>
	</div>
	</form>
	
	<?php
	if (isset($_SESSION['done']))
	{
		if ($_SESSION['done'] == "Y")
		{
	?>
	<script>
	document.getElementById('screen1').style.display = 'none';
	document.getElementById('screen2').style.display = 'block';
	</script>
	<?php
		}
	}
	?>
  </body>
</html>