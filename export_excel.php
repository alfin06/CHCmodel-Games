<?php
	include("config.php");
	session_start();
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=spg.xls");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
	<?php
	date_default_timezone_set('Asia/Bangkok');
	$date = date("Y-m-d G:i:s");

	$result = $db->query("SELECT DATE_FORMAT(signup_date, '%d/%m/%Y at %H:%i') AS tgl_signup, name, grade, student_name, email, phone, question1, question2, question3, question4, 
								 question5, question6, question7, question8, question9, question10, question11, question12, question13,
								 question14, question15, question16, question17, question18, question19, question20,
								 question21, question22, question23,
								 question24, question25, question26, question27, question28, question29, question30,
								 question31, question32, question33, question34, question35
							FROM survey
						   WHERE id = ".$_SESSION['survey_id']);
									  
	while($r = mysqli_fetch_array($result))
	{
		$name = $r['name'];
		$signup_date = $r['tgl_signup'];
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
		$question21 = $r['question21'];
		$question22 = $r['question22'];
		$question23 = $r['question23'];
		$question24 = $r['question24'];
		$question25 = $r['question25'];
		$question26 = $r['question26'];
		$question27 = $r['question27'];
		$question28 = $r['question28'];
		$question29 = $r['question29'];
		$question30 = $r['question30'];
		$question31 = $r['question31'];
		$question32 = $r['question32'];
		$question33 = $r['question33'];
		$question34 = $r['question34'];
		$question35 = $r['question35'];
	}
	?>

	<center>
		<h1>Skala Penilaian Guru</h1>
	</center>
	
	<h3>Data Diri</h3>
	<form>
	  <div class="form-group">
		<label for="name">Nama lengkap guru</label>
		<input type="text" class="form-control" id="name" name="name" value='<?php echo $name;?>' disabled>
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Tahun lalu mengajar kelas</label>
		<input type="text" class="form-control" id="grade" name="grade" value='<?php echo $grade;?>' disabled>
	  </div>
	  <div class="form-group">
		<label for="name">Nama lengkap siswa yang diberi penilaian</label>
		<input type="text" class="form-control" id="student" name="student" value='<?php echo $student_name;?>' disabled>
	  </div>
	  <div class="form-group">
		<label for="name">Email</label>
		<input type="email" class="form-control" id="email" name="email" value='<?php echo $email;?>' disabled>
	  </div>
	  <div class="form-group">
		<label for="name">No. handphone</label>
		<input type="text" class="form-control" id="phone" name="phone" value='<?php echo $phone;?>' disabled>
	  </div>
	  <div class="form-group">
		<label for="name">Tgl Survey</label>
		<input type="text" class="form-control" id="tgl" name="tgl" value='<?php echo $signup_date;?>' disabled>
	  </div>
	</form>
	<br/><br/>

	<table border="1">
		<thead>
			<tr class="w3-pale-yellow">
				<th>No.</th>
				<th>Perilaku Anak</th>
				<th>Sangat jarang</th>
				<th>Kadang-kadang</th>
				<th>Sering</th>
				<th>Sangat Sering</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1.</td>
				<td>Kesulitan untuk mempertahankan perhatian pada saat melaksanakan tugas yang menuntut berpikir,
					 seperti menalar, mengingat, ketelitian, keakuratan.</td>
				<td><input type="radio" value="1" name="question1" <?php if($question1==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question1" <?php if($question1==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question1" <?php if($question1==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question1" <?php if($question1==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>2.</td>
				<td>Berlari-lari atau memanjat secara berlebihan pada situasi yang tidak sesuai untuk hal tersebut.</td>
				<td><input type="radio" value="1" name="question2" <?php if($question2==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question2" <?php if($question2==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question2" <?php if($question2==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question2" <?php if($question2==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>3.</td>
				<td>Tidak mampu menyelesaikan pekerjaan yang sudah dimulai, khususnya yang menuntut kecakapan
					berpikir seperti menalar, mengingat, ketelitian dan keakuratan.</td>
				<td><input type="radio" value="1" name="question3" <?php if($question3==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question3" <?php if($question3==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question3" <?php if($question3==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question3" <?php if($question3==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>4.</td>
				<td>Tidak mampu memberi perhatian kepada hal-hal kecil, khususnya dalam pengerjaan tugas atau
					kegiatan lainnya yang menuntut ketelitian sehingga cenderung ceroboh.</td>
				<td><input type="radio" value="1" name="question4" <?php if($question4==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question4" <?php if($question4==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question4" <?php if($question4==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question4" <?php if($question4==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>5.</td>
				<td> Ketika berada dalam suatu percakapan cenderung tidak memperhatikan lawan bicara.</td>
				<td><input type="radio" value="1" name="question5" <?php if($question5==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question5" <?php if($question5==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question5" <?php if($question5==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question5" <?php if($question5==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>6.</td>
				<td>Membutuhkan waktu tambahan dalam pengerjaan tugas seperti mencatat, menyalin dan mengerjakan soal.</td>
				<td><input type="radio" value="1" name="question6" <?php if($question6==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question6" <?php if($question6==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question6" <?php if($question6==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question6" <?php if($question6==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>7.</td>
				<td>Kemampuan sosialisasi buruk.</td>
				<td><input type="radio" value="1" name="question7" <?php if($question7==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question7" <?php if($question7==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question7" <?php if($question7==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question7" <?php if($question7==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>8.</td>
				<td>Mudah lupa hal-hal yang telah dipelajari. </td>
				<td><input type="radio" value="1" name="question8" <?php if($question8==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question8" <?php if($question8==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question8" <?php if($question8==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question8" <?php if($question8==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>9.</td>
				<td>Menghindari, enggan, atau mengalami kesulitan melaksanakan tugas-tugas yang membutuhkan ketekunan seperti menyelesaikan pekerjaan sekolah atau pekerjaan rumah.</td>
				<td><input type="radio" value="1" name="question9" <?php if($question9==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question9" <?php if($question9==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question9" <?php if($question9==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question9" <?php if($question9==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>10.</td>
				<td>Membutuhkan bimbingan penuh untuk dapat menyelesaikan tugas yang menuntut untuk berpikir dan ketekunan.</td>
				<td><input type="radio" value="1" name="question10" <?php if($question10==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question10" <?php if($question10==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question10" <?php if($question10==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question10" <?php if($question10==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>11.</td>
				<td>Mengalami kesulitan untuk bermain atau melaksanakan kegiatan dengan tenang di waktu senggang.</td>
				<td><input type="radio" value="1" name="question11" <?php if($question11==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question11" <?php if($question11==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question11" <?php if($question11==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question11" <?php if($question11==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>12.</td>
				<td>Mudah terstimulus atau 'terpancing' sehingga bertindak impulsif (bertindak tanpa berpikir).</td>
				<td><input type="radio" value="1" name="question12" <?php if($question12==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question12" <?php if($question12==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question12" <?php if($question12==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question12" <?php if($question12==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>13.</td>
				<td>Melontarkan jawaban secara terburu-buru terhadap pertanyaan yang belum selesai ditanyakan.</td>
				<td><input type="radio" value="1" name="question13" <?php if($question13==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question13" <?php if($question13==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question13" <?php if($question13==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question13" <?php if($question13==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>14.</td>
				<td>Meninggalkan tempat duduk di kelas atau situasi lain di mana diharapkan untuk tetap duduk diam.</td>
				<td><input type="radio" value="1" name="question14" <?php if($question14==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question14" <?php if($question14==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question14" <?php if($question14==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question14" <?php if($question14==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>15.</td>
				<td>Mengalami kesulitan untuk antri atau menunggu giliran dalam bermain atau situasi kelompok.</td>
				<td><input type="radio" value="1" name="question15" <?php if($question15==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question15" <?php if($question15==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question15" <?php if($question15==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question15" <?php if($question15==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>16.</td>
				<td>Perhatian mudah terpecah atau terbagi ke hal lain yang bukan merupakan fokus utama. </td>
				<td><input type="radio" value="1" name="question16" <?php if($question16==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question16" <?php if($question16==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question16" <?php if($question16==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question16" <?php if($question16==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>17.</td>
				<td>Mudah tersinggung dan merasa terganggu oleh orang lain.</td>
				<td><input type="radio" value="1" name="question17" <?php if($question17==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question17" <?php if($question17==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question17" <?php if($question17==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question17" <?php if($question17==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>18.</td>
				<td>Kesulitan dalam menyelesaikan tugas, khususnya menuntut untuk berpikir, ketekunan dan ketelitian dengan baik, tanpa bantuan orang lain.</td>
				<td><input type="radio" value="1" name="question18" <?php if($question18==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question18" <?php if($question18==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question18" <?php if($question18==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question18" <?php if($question18==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>19.</td>
				<td>Terkendala untuk menyelesaikan tugas tepat pada waktunya, lebih dikarenakan kesulitan mempertahankan perhatian sewaktu mengerjakannya. </td>
				<td><input type="radio" value="1" name="question19" <?php if($question19==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question19" <?php if($question19==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question19" <?php if($question19==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question19" <?php if($question19==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>20.</td>
				<td>Kesulitan untuk mengikuti perintah maupun instruksi yang berjenjang.</td>
				<td><input type="radio" value="1" name="question20" <?php if($question20==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question20" <?php if($question20==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question20" <?php if($question20==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question20" <?php if($question20==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>21.</td>
				<td>Perhatiannya mudah beralih ketika diberi petunjuk untuk mengerjakan sesuatu.</td>
				<td><input type="radio" value="1" name="question21" <?php if($question21==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question21" <?php if($question21==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question21" <?php if($question21==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question21" <?php if($question21==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>22.</td>
				<td>Perhatian mudah teralihkan oleh hal-hal lain seperti suara atau objek lain yang bergerak.</td>
				<td><input type="radio" value="1" name="question22" <?php if($question22==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question22" <?php if($question22==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question22" <?php if($question22==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question22" <?php if($question22==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>23.</td>
				<td>Cenderung ceroboh dan tidak teliti sewaktu mengerjakan tugas, khususnya yang menuntut untuk
					berpikir, mengingat, ketelitian dan merespon dengan cepat.</td>
				<td><input type="radio" value="1" name="question23" <?php if($question23==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question23" <?php if($question23==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question23" <?php if($question23==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question23" <?php if($question23==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>24.</td>
				<td> Tidak pernah bisa diam, tidak mengenal lelah.</td>
				<td><input type="radio" value="1" name="question24" <?php if($question24==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question24" <?php if($question24==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question24" <?php if($question24==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question24" <?php if($question24==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>25.</td>
				<td>Kehilangan benda-benda yang diperlukan untuk menyelesaikan tugas atau kegiatan lain antara lain: alat tulis, buku, mainan.</td>
				<td><input type="radio" value="1" name="question25" <?php if($question25==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question25" <?php if($question25==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question25" <?php if($question25==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question25" <?php if($question25==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>26.</td>
				<td>Kesulitan untuk menyimak percakapan dengan lawan bicara.</td>
				<td><input type="radio" value="1" name="question26" <?php if($question26==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question26" <?php if($question26==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question26" <?php if($question26==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question26" <?php if($question26==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>27.</td>
				<td>Tidak mampu menyelesaikan tugas yang diberikan, terutama tugas yang menuntut untuk berpikir, bernalar, mengingat dan merespon dengan segera seperti mencongak, dikte, membaca bergiliran.</td>
				<td><input type="radio" value="1" name="question27" <?php if($question27==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question27" <?php if($question27==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question27" <?php if($question27==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question27" <?php if($question27==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>28.</td>
				<td>Cenderung selalu dalam keadaan "siap gerak" atau aktivitasnya seperti digerakkan oleh mesin.</td>
				<td><input type="radio" value="1" name="question28" <?php if($question28==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question28" <?php if($question28==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question28" <?php if($question28==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question28" <?php if($question28==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>29.</td>
				<td>Sulit dikendalikan pada saat di tempat umum.</td>
				<td><input type="radio" value="1" name="question29" <?php if($question29==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question29" <?php if($question29==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question29" <?php if($question29==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question29" <?php if($question29==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>30.</td>
				<td> Menyela atau memaksakan diri terhadap orang lain (misalnya memotong, "menyelak" percakapan atau menganggu jalannya sebuah permainan).</td>
				<td><input type="radio" value="1" name="question30" <?php if($question30==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question30" <?php if($question30==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question30" <?php if($question30==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question30" <?php if($question30==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>31.</td>
				<td>Usil, mengganggu siswa lain di dalam kelas.</td>
				<td><input type="radio" value="1" name="question31" <?php if($question31==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question31" <?php if($question31==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question31" <?php if($question31==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question31" <?php if($question31==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>32.</td>
				<td>Terlalu aktif atau aktivitasnya berlebihan.</td>
				<td><input type="radio" value="1" name="question32" <?php if($question32==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question32" <?php if($question32==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question32" <?php if($question32==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question32" <?php if($question32==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>33.</td>
				<td>Kesulitan mengikuti instruksi sehingga gagal untuk menyelesaikan tugas sekolah, bukan karena tingkah laku atau sikap menentang atau tidak memahami instruksi.</td>
				<td><input type="radio" value="1" name="question33" <?php if($question33==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question33" <?php if($question33==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question33" <?php if($question33==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question33" <?php if($question33==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>34.</td>
				<td>Tidak bisa duduk diam (kaki dan tangannya tidak bisa diam, atau selalu bergerak).</td>
				<td><input type="radio" value="1" name="question34" <?php if($question34==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question34" <?php if($question34==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question34" <?php if($question34==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question34" <?php if($question34==3) echo 'checked'; ?>/></td>
			</tr>
			<tr>
				<td>35.</td>
				<td>Melamun atau memikirkan hal lain pada saat mengerjakan tugas.</td>
				<td><input type="radio" value="1" name="question35" <?php if($question35==0) echo 'checked'; ?>/></td>
				<td><input type="radio" value="2" name="question35" <?php if($question35==1) echo 'checked'; ?>/></td>
				<td><input type="radio" value="3" name="question35" <?php if($question35==2) echo 'checked'; ?>/></td>
				<td><input type="radio" value="4" name="question35" <?php if($question35==3) echo 'checked'; ?>/></td>
			</tr>
		</tbody>
	</table>
</body>
</html>