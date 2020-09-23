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
												 question14, question15, question16, question17, question18, question19, question20)
									  VALUES ('".$date."', '".$_POST['name']."', '".$_POST['grade']."', '".$_POST['student']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['question1']."', '".$_POST['question2']."', '".$_POST['question3']."', '".$_POST['question4']."', '".$_POST['question5']."', '".$_POST['question6']."', '".$_POST['question7']."', '".$_POST['question8']."', '".$_POST['question9']."', '".$_POST['question10']."', '".$_POST['question11']."', '".$_POST['question12']."', '".$_POST['question13']."', '".$_POST['question14']."', '".$_POST['question15']."', '".$_POST['question16']."', '".$_POST['question17']."', '".$_POST['question18']."', '".$_POST['question19']."', '".$_POST['question20']."')");
									  
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
	  <div class="w3-container w3-padding-64 w3-margin-16" id="projects">
		<br />
		<h3>Data Diri</h3>
		<br />
		<form>
		  <div class="form-group">
			<label for="name">Nama/Inisial Guru</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="" required>
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Kelas yang di ajar</label>
			<select class="form-control" id="grade" name="grade" required>
				<option value="" disabled selected>Pilih Kelas</option>
				<option value="SD Kelas 1">SD Kelas 1</option>
				<option value="SD Kelas 2">SD Kelas 2</option>
				<option value="SD Kelas 3">SD Kelas 3</option>
				<option value="SD Kelas 4">SD Kelas 4</option>
				<option value="SD Kelas 5">SD Kelas 5</option>
				<option value="SD Kelas 6">SD Kelas 6</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="name">Nama/Inisial Siswa</label>
			<input type="text" class="form-control" id="student" name="student" placeholder="" required>
		  </div>
		  <div class="form-group">
			<label for="name">Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="">
		  </div>
		  <div class="form-group">
			<label for="name">No. HP</label>
			<input type="text" class="form-control" id="phone" name="phone" placeholder="">
		  </div>
		</form>
	  </div>

	  <!-- Project Section -->
	  <div class="w3-container w3-padding-32 w3-margin-32" id="projects">
		<h3>Questionnaire</h3>
		<br />
		<p>
			Di bawah ini ada butir-butir masalah perilaku pada anak umumnya. Silahkan isi tiap butir menurut perilaku anak/ murid pada enam bulan terakhir. Pada setiap butir, tanyakan diri anda "Berapa banyak masalah ini terjadi dalam enam bulan teakhir?", dan beri tanda (&#8226;) pada salah satu kolom yang paling tepat. Jika sama sekali tidak dan sangat jarang, anda dapat memberi tanda (&#8226;) kolom 1. Jika selalu demikian, anda dapat memberi tanda (&#8226;) kolom 4. Anda dapat memberi tanda (&#8226;) kolom 2 untuk kadang-kadang dan kolom 3 untuk seringkali. Mohon semua butir diisi.
		</p>
	  </div>

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
						<td>Sering sulit mempertahankan perhatian pada waktu melaksanakan tugas atau kegiatan bermain.</td>
						<td><input type="radio" value="1" name="question1" /></td>
						<td><input type="radio" value="2" name="question1" /></td>
						<td><input type="radio" value="3" name="question1" /></td>
						<td><input type="radio" value="4" name="question1" /></td>
					</tr>
					<tr>
						<td>2.</td>
						<td>Gagal menyelesaikan sesuatu yang telah dimulai.</td>
						<td><input type="radio" value="1" name="question2" /></td>
						<td><input type="radio" value="2" name="question2" /></td>
						<td><input type="radio" value="3" name="question2" /></td>
						<td><input type="radio" value="4" name="question2" /></td>
					</tr>
					<tr>
						<td>3.</td>
						<td>Gagal memberi perhatian kepada hal-hal kecil atau ceroboh dalam menyelesaikan tugas-tugas sekolah, pekerjaan, atau kegiatan lainnya.</td>
						<td><input type="radio" value="1" name="question3" /></td>
						<td><input type="radio" value="2" name="question3" /></td>
						<td><input type="radio" value="3" name="question3" /></td>
						<td><input type="radio" value="4" name="question3" /></td>
					</tr>
					<tr>
						<td>4.</td>
						<td>Sering seolah-olah tidak memperhatikan orang pada waktu diajak berbicara.</td>
						<td><input type="radio" value="1" name="question4" /></td>
						<td><input type="radio" value="2" name="question4" /></td>
						<td><input type="radio" value="3" name="question4" /></td>
						<td><input type="radio" value="4" name="question4" /></td>
					</tr>
					<tr>
						<td>5.</td>
						<td>Sering lambat dalam menyelesaikan tugas di sekolah (mencatat, menyalin, mengerjakan soal).</td>
						<td><input type="radio" value="1" name="question5" /></td>
						<td><input type="radio" value="2" name="question5" /></td>
						<td><input type="radio" value="3" name="question5" /></td>
						<td><input type="radio" value="4" name="question5" /></td>
					</tr>
					<tr>
						<td>6.</td>
						<td>Sering lupa tentang sesuatu yang telah dipelajari.</td>
						<td><input type="radio" value="1" name="question6" /></td>
						<td><input type="radio" value="2" name="question6" /></td>
						<td><input type="radio" value="3" name="question6" /></td>
						<td><input type="radio" value="4" name="question6" /></td>
					</tr>
					<tr>
						<td>7.</td>
						<td>Menghindari, enggan, atau mengalami kesulitan melaksanakan tugas-tugas yang membutuhkan ketekunan yang berkesinambungan (seperti menyelesaikan pekerjaan sekolah atau pekerjaan rumah).</td>
						<td><input type="radio" value="1" name="question7" /></td>
						<td><input type="radio" value="2" name="question7" /></td>
						<td><input type="radio" value="3" name="question7" /></td>
						<td><input type="radio" value="4" name="question7" /></td>
					</tr>
					<tr>
						<td>8.</td>
						<td>Membutuhkan bimbingan penuh untuk dapat menyelesaikan tugas.</td>
						<td><input type="radio" value="1" name="question8" /></td>
						<td><input type="radio" value="2" name="question8" /></td>
						<td><input type="radio" value="3" name="question8" /></td>
						<td><input type="radio" value="4" name="question8" /></td>
					</tr>
					<tr>
						<td>9.</td>
						<td>Sering perhatiannya mudah terpecah atau terbagi.</td>
						<td><input type="radio" value="1" name="question9" /></td>
						<td><input type="radio" value="2" name="question9" /></td>
						<td><input type="radio" value="3" name="question9" /></td>
						<td><input type="radio" value="4" name="question9" /></td>
					</tr>
					<tr>
						<td>10.</td>
						<td>Tidak mampu menyelesaikan tugas dengan baik tanpa bantuan orang lain.</td>
						<td><input type="radio" value="1" name="question10" /></td>
						<td><input type="radio" value="2" name="question10" /></td>
						<td><input type="radio" value="3" name="question10" /></td>
						<td><input type="radio" value="4" name="question10" /></td>
					</tr>
					<tr>
						<td>11.</td>
						<td>Tidak dapat menyelesaikan tugas sesuai dengan waktunya.</td>
						<td><input type="radio" value="1" name="question11" /></td>
						<td><input type="radio" value="2" name="question11" /></td>
						<td><input type="radio" value="3" name="question11" /></td>
						<td><input type="radio" value="4" name="question11" /></td>
					</tr>
					<tr>
						<td>12.</td>
						<td>Tidak dapat mengikuti perintah secara berurutan.</td>
						<td><input type="radio" value="1" name="question12" /></td>
						<td><input type="radio" value="2" name="question12" /></td>
						<td><input type="radio" value="3" name="question12" /></td>
						<td><input type="radio" value="4" name="question12" /></td>
					</tr>
					<tr>
						<td>13.</td>
						<td>Perhatiannya mudah beralih ketika diberi petunjuk untuk mengerjakan sesuatu.</td>
						<td><input type="radio" value="1" name="question13" /></td>
						<td><input type="radio" value="2" name="question13" /></td>
						<td><input type="radio" value="3" name="question13" /></td>
						<td><input type="radio" value="4" name="question13" /></td>
					</tr>
					<tr>
						<td>14.</td>
						<td>Perhatiannya sering mudah dialihkan oleh rangsangan dari luar.</td>
						<td><input type="radio" value="1" name="question14" /></td>
						<td><input type="radio" value="2" name="question14" /></td>
						<td><input type="radio" value="3" name="question14" /></td>
						<td><input type="radio" value="4" name="question14" /></td>
					</tr>
					<tr>
						<td>15.</td>
						<td>Sering ceroboh atau tidak teliti dalam menyelesaikan tugas.</td>
						<td><input type="radio" value="1" name="question15" /></td>
						<td><input type="radio" value="2" name="question15" /></td>
						<td><input type="radio" value="3" name="question15" /></td>
						<td><input type="radio" value="4" name="question15" /></td>
					</tr>
					<tr>
						<td>16.</td>
						<td>Sering menghilangkan benda-benda yang diperlukan untuk menyelesaikan tugas atau kegiatan lain (seperti tugas sekolah: pensil, buku, peralatan atau alat bermain).</td>
						<td><input type="radio" value="1" name="question16" /></td>
						<td><input type="radio" value="2" name="question16" /></td>
						<td><input type="radio" value="3" name="question16" /></td>
						<td><input type="radio" value="4" name="question16" /></td>
					</tr>
					<tr>
						<td>17.</td>
						<td>Sering tidak mendengarkan pada waktu diajak berbicara secara langsung.</td>
						<td><input type="radio" value="1" name="question17" /></td>
						<td><input type="radio" value="2" name="question17" /></td>
						<td><input type="radio" value="3" name="question17" /></td>
						<td><input type="radio" value="4" name="question17" /></td>
					</tr>
					<tr>
						<td>18.</td>
						<td>Sering gagal menyelesaikan tugas.</td>
						<td><input type="radio" value="1" name="question18" /></td>
						<td><input type="radio" value="2" name="question18" /></td>
						<td><input type="radio" value="3" name="question18" /></td>
						<td><input type="radio" value="4" name="question18" /></td>
					</tr>
					<tr>
						<td>19.</td>
						<td>Tidak mampu mengikuti petunjuk dan gagal menyelesaikan tugas sekolah (tidak disebabkan oleh tingkah laku/ sikap menentang atau kegagalan untuk memahami petunjuk).</td>
						<td><input type="radio" value="1" name="question19" /></td>
						<td><input type="radio" value="2" name="question19" /></td>
						<td><input type="radio" value="3" name="question19" /></td>
						<td><input type="radio" value="4" name="question19" /></td>
					</tr>
					<tr>
						<td>20.</td>
						<td>Sering "bengong" pada waktu melaksanakan tugas.</td>
						<td><input type="radio" value="1" name="question20" /></td>
						<td><input type="radio" value="2" name="question20" /></td>
						<td><input type="radio" value="3" name="question20" /></td>
						<td><input type="radio" value="4" name="question20" /></td>
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
	
	  <div class="w3-row-padding w3-padding-32">
		<p><small><i>
			Cutoff Score:<br/>
			Pemeriksa Orang tua	> 30<br/>
			Pemeriksa Guru	    > 29<br/>
			Pemeriksa Dokter	> 22
		</p></small></i>
		<p><small><i>
			Catatan: Anak dengan skor SPPAHI lebih besar dari Cutoff Score dinyatakan sebagai berisiko tinggi mengalami Gangguan pemusatan Perhatian/ Hiperaktivitas (GPPH) atau Attention Deficit Hyperactivity Disorder (ADHD). Anak yang berisiko tinggi dianjurkan untuk segera dilakukan pemeriksaan lebih lanjut sesuai dengan prosedur pemeriksaan anak dengan GPPH. 
		</i></small></p>
	  </div>
	</div>
	</form>
	
	<form id="screen2" style="display: none;">
	<div class="w3-content w3-padding" style="max-width:1564px; margin-top: 150px;">
		<h2>Terima kasih sudah mengisi survey ini!</h2>
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