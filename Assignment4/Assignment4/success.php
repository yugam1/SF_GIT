<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="css.css" />
    <link rel="icon" href="dollr.png" type="image/png" >
	<style type="text/css">
		form{
			text-align: center;
			height: 400px;
		}
		#message{
			background-color: black;
			padding: 20px;
			font-size: 25px;
		}
		a:link,visited{
			text-decoration: none;
			color: grey;
		}
		#form1 {
	    cursor: pointer;
		display:inline-block;
	    background-color:white;
	    font-size: 25px;
	    border-radius: 20px;
	    border: none;
	    color: white;
	    font-weight: bold;
	    width: 200px;
	    border: 1px solid white;
	    font-family: Bradley Hand ITC;
	    }
		#form1{
			margin:0 auto;
		}
	</style>
</head>

<body>
	<div id="wrapper">
		
		<div id="header">
		<h1>Home Page</h1>
		</div><!-- #header -->
		
		<div id="content">
				<form ><br><br>
				<h1>Congratulations</h1><div id="message">
				<?php 
	            echo 'You are successfully registered in DOLLARS. <br><br><a href="login.php"> <div id="form1">Log In </a> </div>';
				?></div>
				</form>
	    <br><br>
		</div><!-- #content -->
		
		<div id="footer">
			Copyright &copy projectyugam.esy.es
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
	
</body>

</html>