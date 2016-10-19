<?php
require 'connect.inc.php';
if (isset($_POST['name'])&&isset($_POST['roll'])) {
    $name= $_POST['name'];
    $roll=  $_POST['roll'];
    $id=$_GET['id'];
    if (!empty($_POST['name'])&&!empty($_POST['roll'])) {
                $query="INSERT INTO ajax VALUES ('','".$id."','".$name."','".$roll."')";

                if ($query_run=mysql_query($query)) {
                        echo '<script language="javascript">alert("Student Added");</script>';
                }else {
                        echo '<script language="javascript">alert("Sorry, we could not add data at this time try again later");</script>';
                }


            }


            }

?>


<html>
<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="jquery.js"></script>
<style type="text/css">
	input[type=text] {
		line-height: 20px;
}
</style>
<body>

<div id="wrapper">
		
		<div id="header">
		<h1>Add NEW STUDENT</h1>
		</div><!-- #header -->
		
		<div id="content">

		<form method="post" action=""><br>
		Name:<input type="text" name="name" required placeholder="NAME*"  /><br /><br>
		Roll No:<input type="text" name="roll" required placeholder="ROLL NO*" /><br />
		<input type="submit" name="submit" value="Add Data" />
		</form>
		<?php  
    		$id=$_GET['id'];
		    echo '<a href="form.php?id='.$id.'"><input type="submit" value="View Students" id="button"></a>';
		?>

		</div><!-- #content -->
		
		<div id="footer">
			Copyright &copy projectyugam.esy.es
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
</body>
</html>