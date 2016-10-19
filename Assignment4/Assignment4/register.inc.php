<?php
if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['dob'])&&isset($_POST['name'])&&isset($_POST['email'])	) {
	$username=	$_POST['username'];
	$password=	$_POST['password'];
	$password_again=	$_POST['password_again'];
	$dob=	$_POST['dob'];
	$name=	$_POST['name'];
	$email=	$_POST['email'];
	$password_hash=md5($password);
	if (!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['password_again'])&&!empty($_POST['dob'])&&!empty($_POST['name'])&&!empty($_POST['email'])) {

	
	$array=explode('/', $dob);
	if (!(($array[0]>0)&&($array[0]<13)&&($array[1]>0)&&($array[1]<32)&&($array[2]>1969)&&($array[2]<2017))) {
		echo '<script language="javascript">alert("Invalid DOB ");</script>';
	}else {

	if ($password!=$password_again) {
	echo '<script language="javascript">alert("PASSWORD don\'t match ");</script>';
	}else{
		
		$query="SELECT username FROM users WHERE username='$username'";

		if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);

			if ($query_num_rows==1) {
				echo '<script language="javascript">alert("The  USERNAME: '.$username.'  already exists");</script>';
			}else {

				$query="INSERT INTO users VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($name)."','".mysql_real_escape_string($dob)."','".mysql_real_escape_string($email)."')";

				if ($query_run=mysql_query($query)) {
						include 'success.php';
				}else {
						echo '<script language="javascript">alert("Sorry, we could not register you at this time try again later");</script>';
				}


			}


			}
		} 
	}

	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="css.css" />
  	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="icon" href="dollr.png" type="image/png" >
  	<script>
  		$(function() {
    	$( "#datepicker" ).datepicker({maxDate: '0'});
  		});
  	</script>
  	<style type="text/css">
  			#img1{
			left: 10px;
			position: absolute;
			top: 10px;
			height: 15%;
		}
		#img2{
			position: absolute;
			width: 18%;
			right: 10px;
			top: 10px;
			background-color: black;
		}
  	</style>

</head>

<body>
	<div id="wrapper">
		
		<div id="header">
		<h1>Register</h1>
		<a href="index.php"><img src="dollr.png" id="img1"></a>
		<a href="login.php"><img src="button.png" id="img2"></a>
		</div><!-- #header -->
		
		<div id="content">
				<form action="register.php" method="POST">
				
				<div id="get">Get Started Today</div><div id="form"><br>Name *<br>
				<input type="text" name="name" placeholder="Name *"  required value="<?php if (isset($name)) {echo $name;} ?>"></input><br>Username *<br>
				<input type="text" name="username" placeholder="Username *"  required value="<?php if (isset($username)) {echo $username;} ?>"></input><br> <br>Date of Birth MM/DD/YYYY *<br>
				<input type="text" name="dob" placeholder="Date of Birth MM/DD/YYYY *" id="datepicker"  required value="<?php if (isset($dob)) {echo $dob;} ?>"><br><br>Email Address *<br>
				<input type="email" name="email" placeholder="Enter a valid Email Address *"  required value="<?php if (isset($email)) {echo $email;} ?>"></input><br>Password *<br>
				<input type="password" name="password" placeholder="Password *" required></input><br>Confirm Password *<br>
				<input type="password" name="password_again" placeholder="Confirm Password *" required></input> <br>
				<input type="submit" value="Submit">
				</div>	
				</form>
	    <br><br>
		</div><!-- #content -->
		
		<div id="footer">
			Copyright &copy projectyugam.esy.es
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
	
</body>

</html>