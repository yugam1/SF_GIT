<?php 

if (isset($_POST['username'])&&isset($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	if (!empty($username)&&!empty($password)) {
		
			if (($username=='admin')&&($password=='pass')) {
                $_SESSION['user_id']='100';
				header('Location: index.php') ;

			}else {
				echo '<script language="javascript">alert("Invalid USERNAME/PASSWORD ");</script>';			
			}
		} 

	else {
		echo '<script language="javascript">alert("You must supply USERNAME and PASSWORD");</script>';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
    <link rel="icon" href="dollr.png" type="image/png" >
	<style type="text/css">
		html,
body {
    margin:0;
    padding:0;
    height:100%;
    text-align: center;
    background-image: url(sc.jpg);
    font-family: Tele-Marines;
    background-size: 100%  100%;
    background-repeat: no-repeat;
    min-width: 750px;
    background-color: #005BDF;
}
#wrapper {
    min-height:100%;
    position:relative;
}
#header {
    background:black;
    padding:10px;
    color: #555;
    font-family: Tele-Marines;
    height: 70px;
    opacity: .5;
}
#content {
    padding-bottom:50px;
    font-size: 18px ;
    font-family: Comic Sans MS;
    color: white;

}
#footer {
    background:black;
    width:100%;
    height:5%;
    position:absolute;
    bottom:0;
    left:0;
    color: #555;
    font-family: Tele-Marines;
    padding: 2px;
    opacity: .5;
}
form{
    border-radius: 10px;
    border: 5px solid black;
    background-color: black;
    width: 50%;
    max-width: 600px;
    margin:0 auto;
    top: 150px;
    opacity: .5;
    margin-top: 50px;
}
input[type=submit] {
    position: relative;
    width: 200px;
    height: 50px;
    cursor: pointer;
    background-color: white;
    color: black;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    padding-left: 15px;
    color: black;
    font-weight: bolder;
}

input[type=text],[type=password] {
    position: relative;
    height: 30px;
    width: 300px;
    background-color: #E8EBED;
    font-size: 20px;
    border:2px solid #E8EBED;
    color: black;
    border-radius: 5px;
    font-weight: bold;
    outline: none;
}
input:required:invalid, input:focus:invalid {
    background-image: url(invalid.png);
    background-size: 10px;
    background-position: right top;
    background-repeat: no-repeat;
  }
input:required:valid {
    background-image: url(valid.png);
    background-size: 20px;
    background-position: right top;
    background-repeat: no-repeat;
  }
    #img1{
        left: 10px;
        position: absolute;
        top: 10px;
        height: 70px;
    }

	</style>
</head>
<body>
	<div id="wrapper">
		
		<div id="header">
		<h1>Home Page</h1>
<a href=".."><img src="dollr.png" id="img1"></a>
		</div><!-- #header -->
		
		<div id="content">
		<form action="<?php echo $current_file; ?>" method="POST"><br>
		<h1> ADMIN LOGIN</h1>
		<br>
			USERNAME: <input type="text" name="username" required=""><br><br>
			PASSWORD: <input type="password" name="password" required=""><br><br>
			<input type="submit" value="LOG IN"><br>
		</form>
		</div><!-- #content -->
		
		<div id="footer">
			Copyright &copy projectyugam.esy.es
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->


</body>
</html>