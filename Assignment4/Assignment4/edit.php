<html>
<head>
<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="jquery.js"></script>
<style type="text/css">
	input[type=text] {
		line-height: 20px;
}
</style>

    <link rel="icon" href="dollr.png" type="image/png" >
</head>
<body>

<div id="wrapper">
		
		<div id="header">
		<h1>Home Page</h1>
		</div><!-- #header -->
		
		<div id="content">
		<?php  

		require 'connect.inc.php';
		if(isset($_GET['id']))
		{
		$id=$_GET['id'];
		if(isset($_POST['submit']))
		{
		$name=$_POST['name'];
		$roll=$_POST['roll'];
		$query3=mysql_query("update ajax set name='$name', roll='$roll' where id='$id'");
		if($query3)
		{
		echo '<script language="javascript">alert("Student Data Updated");</script>';
		}
		}
		$query1=mysql_query("select * from ajax where id='$id'");
		$query2=mysql_fetch_array($query1);
		?>
		<form method="post" action=""><br>
		Name:<input type="text" name="name" required value="<?php echo $query2['name']; ?>"  /><br /><br>
		Roll No:<input type="text" name="roll" required value="<?php echo $query2['roll']; ?>" /><br />
		<input type="submit" name="submit" value="update" />
		</form>
		<form action="login.php"><input type="submit" value="Go Back" ></form>
		<?php
		}

		?>
		</div><!-- #content -->
		
		<div id="footer">
			Copyright &copy projectyugam.esy.es
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
</body>
</html>