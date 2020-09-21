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

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="plugins/toastr/js/toastr.min.js"></script>
	
    <style>
      html, body {
      min-height: 100%;
      background-image: url("images/bg1.png");
      /* Full height */
      height: 100%;
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: "Comic Sans MS", cursive, sans-serif;
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
      height: 100%;
      padding: 25px;
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
  background-color: #ff5f5f;
  border-radius: 25px;
  border:10px solid #ffd065;
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
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
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
	
	date_default_timezone_set('Asia/Bangkok');
	$date = date("Y-m-d G:i:s");

	// Insert data
	if (isset($_POST['insert']))
	{
		$result = $db->query("INSERT INTO account(name, gender, age, signup_date)
									  VALUES ('".$name."', '".$gender."', ".$age.", '".$date."')");
									  
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
			echo "<script>";
			echo "window.open('result.php', '_SELF');";
			echo "</script>";
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

  <script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
  </script>

<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#" class="w3-bar-item">SPASS</a>
    <div class="w3-dropdown-click w3-right w3-hover-none">
      <button class="w3-button" onclick="myFunction()" style="color:black; font-size: 18px;">
        Admin Login <i class="fa fa-caret-down"></i>
      </button>
      <div id="demo" class="w3-dropdown-content dv_adminlogin" style="right:0">
 <form method="post" >
        <a href="#" class="w3-bar-item w3-mobile"><span>Password:</span><br/>
                      <input type="password" name="password" id="password" style="color:black;border:1px solid"/>
                      <button type="submit" id="login" name="login" class="btn_login" style="width:70px;" formnovalidate>Login</button></a>
                      </form>
      </div>
    </div>
  </div>
</div>

    <div class="main-block">

        <div class="dv_form">
          <form method="post">
            <div class="title">
              <i class="fas fa-pencil-alt"></i> 
              <h2>Register here</h2>
            </div>
            <div class="info">
              <input class="fname" type="text" name="name" id="name" placeholder="Full Name" required>
		          <select name="gender" id="gender" required>
                <option value="" selected disabled>Gender</option>
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


    </div>
  </body>
</html>