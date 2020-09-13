<?php
	include("config.php");
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Games</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	
	<link href="plugins/toastr/css/toastr.min.css" rel="stylesheet">  
	<script src="plugins/toastr/js/toastr.min.js"></script>
	
    <style>
      html, body {
      min-height: 100%;white
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
	  
      }
      h1 {
	  color: black;
	  text-transform: uppercase;
      font-weight: 400;
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
      height: 100%;
      padding: 25px;
      background: white; 
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
      form {
      background: rgba(0, 0, 0, 0.7); 
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
      background: black; 
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
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
    </style>
  </head>
  <body>
<?php
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	set_time_limit(0);

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	
	$ldate = gmdate("Y-M-d", time()+420*60+7);

	// Insert data
	if (isset($_POST['insert']))
	{
		$result = $db->query("INSERT INTO account(name, gender, age)
									  VALUES ('".$name."', '".$gender."', ".$age.")");
									  
		if ($result === TRUE) 
		{
			$_SESSION['login_user'] = $name;
			
			echo "<script>";
			echo "window.open('menu.php', '_SELF');";
			echo "</script>";
		}
	}
	
	// Continue
	if (isset($_POST['continue']))
	{
		echo "<script>";
		echo "window.open('menu.php', '_SELF');";
		echo "</script>";
	}
	
	// Login
	if (isset($_POST['login']))
	{
		$qry ="SELECT COUNT(*) AS found
				FROM user
			   WHERE password ='".$_POST['password']."'";
			   
		$result = $db->query($qry);// or die(mysql_error());
		
		while($r = mysqli_fetch_array($result))
		{
			$found  = $r['found'];
		}
		
		if (intval($found) > 0)
		{
			header("Location: result.php");
			exit();
		}
		else
		{
		?>
			<script type="text/javascript">
				alert('Password salah.');
			</script> 
		<?php
		}
	}
?>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-gamepad"></i>
        <h1>Welcome</h1>
		<form method="post" style="background:white;">
		<div style="color:black;">
			<span>Enter Password:</span>
			<input type="password" name="password" id="password" style="color:black;border:1px solid"/><br/>
			<button type="submit" id="login" name="login" style="width:50%;" formnovalidate>Login</button>
		</div>
		</form>
      </div>
      <form method="post">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="name" id="name" placeholder="Full Name" required>
		  <select name="gender" id="gender" required>
            <option value="" selected>Gender</option>
            <option value="B">Boy</option>
            <option value="G">Girl</option>
          </select>
          <input type="number" name="age" id="age" placeholder="Age" required>
        </div>
        <button type="submit" id="insert" name="insert">Register</button>
		<?php
		if (isset($_SESSION['login_user']))
		{
		?>
        <button type="submit" id="continue" name="continue" style="background:green;" formnovalidate>Continue</button>
		<?php
		}
		?>
      </form>
    </div>
  </body>
</html>