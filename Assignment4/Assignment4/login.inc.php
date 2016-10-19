<?php 

if (isset($_POST['username'])&&isset($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_hash=md5($password);
	if (!empty($username)&&!empty($password)) {
		
		$query="SELECT id FROM users WHERE username='$username' AND password='$password_hash'";

		if($query_run=mysql_query($query)) {
			$query_num_rows=mysql_num_rows($query_run);

			if ($query_num_rows==0) {
				echo '<script language="javascript">alert("Invalid USERNAME/PASSWORD ");</script>';
			}elseif ($query_num_rows==1) {
			
				$user_id=mysql_result($query_run, 0,'id');
				$_SESSION['user_id']=$user_id;
				header('location:login.php');


			}
		} 

	}else {
		echo '<script language="javascript">alert("You must supply USERNAME and PASSWORD");</script>';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="dollr.png" type="image/png" >
	<title>LOGIN</title>
	<style type="text/css">
		body{
			position: absolute;
			text-align: center;
			color: white;
			background-color: black;
			font-family: Comic Sans MS;
			background-image: url(back2.png);
			background-size: 100%;
			background-repeat: no-repeat;
			min-width: 500px;
			width: 100%;
		}
		input[type=submit] {
	    cursor: pointer;
		display:inline-block;
	    background-color: #555;
	    font-size: 20px;
	    border-radius: 20px;
	    border: none;
	    color: white;
	    width: 200px;
	    border: 2px solid white;
	    font-family:Comic Sans MS;
	    outline: none;
	}

	input[type=text],[type=password]{
	    font-size: 14px;
	    border-radius: 20px;
	    outline: none;
	    padding-left: 10px;

	}
	form{
		margin-top: 420px;
	}
	#img1{
		left: 10px;
		position: absolute;
		top: 10px;
		height: 20%;
	}
	#img2{
		position: absolute;
		width: 150px;
		right: 10px;
		bottom: 10px;
		background-color: black;
	}
	#img3{
		position: absolute;
		right: 10px;
		top: 10px;
	}
	</style>
</head>
<body>
<a href="index.php"><img src="dollr.png" id="img1"></a>
<a href="admin/index.php"><img src="admin.png" id="img3"></a>
<a href="register.php"><img src="register.png" id="img2"></a>
<form action="<?php echo $current_file; ?>" method="POST"><br><br>
	USERNAME: <input type="text" name="username"><br><br>
	PASSWORD: <input type="password" name="password"><br><br>
	<input type="submit" value="LOG IN">
</form>
</body>

</html>