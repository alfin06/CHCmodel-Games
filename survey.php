<?php
	include("config.php");
	session_start();
	
	if (!isset($_SESSION['survey_id']))
	{
		header("location:result.php");
	}
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

	$result = $db->query("SELECT signup_date, name, grade, student_name, email, phone, question1, question2, question3, question4, 
								 question5, question6, question7, question8, question9, question10, question11, question12, question13,
								 question14, question15, question16, question17, question18, question19, question20
							FROM survey
						   WHERE id = ".$_SESSION['survey_id']);
									  
	while($r = mysqli_fetch_array($result))
	{
		$name = $r['name'];
		$signup_date = $r['signup_date'];
		$grade = $r['grade'];
		$student_name = $r['student_name'];
		$email = $r['email'];
		$phone = $r['phone'];
		$question1 = $r['question1'];
		$question2 = $r['question2'];
		$question3 = $r['question3'];
		$question4 = $r['question4'];
		$question5 = $r['question5'];
		$question6 = $r['question6'];
		$question7 = $r['question7'];
		$question8 = $r['question8'];
		$question9 = $r['question9'];
		$question10 = $r['question10'];
		$question11 = $r['question11'];
		$question12 = $r['question12'];
		$question13 = $r['question13'];
		$question14 = $r['question14'];
		$question15 = $r['question15'];
		$question16 = $r['question16'];
		$question17 = $r['question17'];
		$question18 = $r['question18'];
		$question19 = $r['question19'];
		$question20 = $r['question20'];
	}
  ?>
	<div class="w3-top">
		<div class="w3-bar w3-white w3-wide w3-padding w3-card">
			<a href="result.php" class="w3-bar-item w3-button"><i class="fas fa-arrow-left"></i></a>
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
			<input type="text" class="form-control" id="name" name="name" value='<?php echo $name;?>' disabled>
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Kelas yang di ajar</label>
			<input type="text" class="form-control" id="grade" name="grade" value='<?php echo $grade;?>' disabled>
		  </div>
		  <div class="form-group">
			<label for="name">Nama/Inisial Siswa</label>
			<input type="text" class="form-control" id="student" name="student" value='<?php echo $student_name;?>' disabled>
		  </div>
		  <div class="form-group">
			<label for="name">Email</label>
			<input type="email" class="form-control" id="email" name="email" value='<?php echo $email;?>' disabled>
		  </div>
		  <div class="form-group">
			<label for="name">No. HP</label>
			<input type="text" class="form-control" id="phone" name="phone" value='<?php echo $phone;?>' disabled>
		  </div>
		  <div class="form-group">
			<label for="name">Tgl Survey</label>
			<input type="text" class="form-control" id="tgl" name="tgl" value='<?php echo $signup_date;?>' disabled>
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
						<td><input type="radio" value="1" name="question1" <?php if($question1==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question1" <?php if($question1==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question1" <?php if($question1==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question1" <?php if($question1==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>2.</td>
						<td>Gagal menyelesaikan sesuatu yang telah dimulai.</td>
						<td><input type="radio" value="1" name="question2" <?php if($question2==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question2" <?php if($question2==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question2" <?php if($question2==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question2" <?php if($question2==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>3.</td>
						<td>Gagal memberi perhatian kepada hal-hal kecil atau ceroboh dalam menyelesaikan tugas-tugas sekolah, pekerjaan, atau kegiatan lainnya.</td>
						<td><input type="radio" value="1" name="question3" <?php if($question3==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question3" <?php if($question3==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question3" <?php if($question3==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question3" <?php if($question3==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>4.</td>
						<td>Sering seolah-olah tidak memperhatikan orang pada waktu diajak berbicara.</td>
						<td><input type="radio" value="1" name="question4" <?php if($question4==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question4" <?php if($question4==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question4" <?php if($question4==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question4" <?php if($question4==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>5.</td>
						<td>Sering lambat dalam menyelesaikan tugas di sekolah (mencatat, menyalin, mengerjakan soal).</td>
						<td><input type="radio" value="1" name="question5" <?php if($question5==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question5" <?php if($question5==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question5" <?php if($question5==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question5" <?php if($question5==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>6.</td>
						<td>Sering lupa tentang sesuatu yang telah dipelajari.</td>
						<td><input type="radio" value="1" name="question6" <?php if($question6==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question6" <?php if($question6==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question6" <?php if($question6==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question6" <?php if($question6==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>7.</td>
						<td>Menghindari, enggan, atau mengalami kesulitan melaksanakan tugas-tugas yang membutuhkan ketekunan yang berkesinambungan (seperti menyelesaikan pekerjaan sekolah atau pekerjaan rumah).</td>
						<td><input type="radio" value="1" name="question7" <?php if($question7==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question7" <?php if($question7==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question7" <?php if($question7==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question7" <?php if($question7==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>8.</td>
						<td>Membutuhkan bimbingan penuh untuk dapat menyelesaikan tugas.</td>
						<td><input type="radio" value="1" name="question8" <?php if($question8==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question8" <?php if($question8==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question8" <?php if($question8==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question8" <?php if($question8==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>9.</td>
						<td>Sering perhatiannya mudah terpecah atau terbagi.</td>
						<td><input type="radio" value="1" name="question9" <?php if($question9==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question9" <?php if($question9==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question9" <?php if($question9==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question9" <?php if($question9==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>10.</td>
						<td>Tidak mampu menyelesaikan tugas dengan baik tanpa bantuan orang lain.</td>
						<td><input type="radio" value="1" name="question10" <?php if($question10==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question10" <?php if($question10==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question10" <?php if($question10==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question10" <?php if($question10==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>11.</td>
						<td>Tidak dapat menyelesaikan tugas sesuai dengan waktunya.</td>
						<td><input type="radio" value="1" name="question11" <?php if($question11==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question11" <?php if($question11==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question11" <?php if($question11==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question11" <?php if($question11==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>12.</td>
						<td>Tidak dapat mengikuti perintah secara berurutan.</td>
						<td><input type="radio" value="1" name="question12" <?php if($question12==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question12" <?php if($question12==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question12" <?php if($question12==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question12" <?php if($question12==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>13.</td>
						<td>Perhatiannya mudah beralih ketika diberi petunjuk untuk mengerjakan sesuatu.</td>
						<td><input type="radio" value="1" name="question13" <?php if($question13==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question13" <?php if($question13==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question13" <?php if($question13==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question13" <?php if($question13==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>14.</td>
						<td>Perhatiannya sering mudah dialihkan oleh rangsangan dari luar.</td>
						<td><input type="radio" value="1" name="question14" <?php if($question14==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question14" <?php if($question14==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question14" <?php if($question14==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question14" <?php if($question14==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>15.</td>
						<td>Sering ceroboh atau tidak teliti dalam menyelesaikan tugas.</td>
						<td><input type="radio" value="1" name="question15" <?php if($question15==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question15" <?php if($question15==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question15" <?php if($question15==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question15" <?php if($question15==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>16.</td>
						<td>Sering menghilangkan benda-benda yang diperlukan untuk menyelesaikan tugas atau kegiatan lain (seperti tugas sekolah: pensil, buku, peralatan atau alat bermain).</td>
						<td><input type="radio" value="1" name="question16" <?php if($question16==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question16" <?php if($question16==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question16" <?php if($question16==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question16" <?php if($question16==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>17.</td>
						<td>Sering tidak mendengarkan pada waktu diajak berbicara secara langsung.</td>
						<td><input type="radio" value="1" name="question17" <?php if($question17==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question17" <?php if($question17==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question17" <?php if($question17==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question17" <?php if($question17==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>18.</td>
						<td>Sering gagal menyelesaikan tugas.</td>
						<td><input type="radio" value="1" name="question18" <?php if($question18==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question18" <?php if($question18==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question18" <?php if($question18==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question18" <?php if($question18==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>19.</td>
						<td>Tidak mampu mengikuti petunjuk dan gagal menyelesaikan tugas sekolah (tidak disebabkan oleh tingkah laku/ sikap menentang atau kegagalan untuk memahami petunjuk).</td>
						<td><input type="radio" value="1" name="question19" <?php if($question19==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question19" <?php if($question19==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question19" <?php if($question19==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question19" <?php if($question19==4) echo 'checked'; ?>/></td>
					</tr>
					<tr>
						<td>20.</td>
						<td>Sering "bengong" pada waktu melaksanakan tugas.</td>
						<td><input type="radio" value="1" name="question20" <?php if($question20==1) echo 'checked'; ?>/></td>
						<td><input type="radio" value="2" name="question20" <?php if($question20==2) echo 'checked'; ?>/></td>
						<td><input type="radio" value="3" name="question20" <?php if($question20==3) echo 'checked'; ?>/></td>
						<td><input type="radio" value="4" name="question20" <?php if($question20==4) echo 'checked'; ?>/></td>
					</tr>
				</tbody>
			</table>
		  </div>
		</div>
	  </div>
	  
	  <?php
		$result = $db->query("SELECT (question1+question2+question3+question4+question5+question6+
									  question7+question8+question9+question10+question11+question12+
									  question13+question14+question15+question16+question17+question18+
									  question19+question20) AS skor
							FROM survey
						   WHERE id = ".$_SESSION['survey_id']);
									  
		while($r = mysqli_fetch_array($result))
		{
			$score = $r['skor'];
		}
	  ?>
	  
	  <div class="w3-row-padding">
		<div class="w3-col m12 w3-margin-bottom">
			<h3>Total Skor: <?php echo $score; ?> </h3>
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
  </body>
</html>