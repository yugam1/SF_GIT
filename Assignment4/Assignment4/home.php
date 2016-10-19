<?php
require 'connect.inc.php';
if (isset($_POST['name1'])&&isset($_POST['roll'])) {
	$name1=	$_POST['name1'];
	$roll=	$_POST['roll'];
	$id=$_SESSION['user_id'];
	if (!empty($_POST['name1'])&&!empty($_POST['roll'])) {
				$query="INSERT INTO ajax VALUES ('','".$id."','".$name1."','".$roll."')";

				if ($query_run=mysql_query($query)) {
						echo '<script language="javascript">alert("Student Added");</script>';
				}else {
						echo '<script language="javascript">alert("Sorry, we could not add data at this time try again later");</script>';
				}


			}


			}

?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="jquery.js"></script>
    <link rel="icon" href="dollr.png" type="image/png" >
	<script type="text/javascript">
		
	$(document).ready(function(){
		$('#button').click(function(){
			$('#content').load('form.php');
		});
	});


	</script>


</head>

<body>
	<div id="wrapper">
		
		<div id="header">
		<h1>Home Page</h1>
		</div><!-- #header -->
		
		<div id="content">
				<div id="message">
				<?php 
				$name=getfield('name');
	            echo 'WELCOME PROFESSOR, '.$name.'.<br> <a href="logout.php"> <div id="form1">Log Out </a> </div>';
				?>
				</div><br>
					<div id="content"><input type="submit" value="Add New Student " id="button"><br>
					<?php 
					$id=$_SESSION['user_id'];
					$query="SELECT * FROM ajax WHERE prop_id='$id'";
					if($query_run= mysql_query($query)){
				 	  if(mysql_num_rows($query_run)==NULL)
				 		echo "No Student";

				 	else{
				 		$i=1;
				 		echo "<table><tr><th>SL No</th><th>Name of Student</th><th>Roll No</th><th>Edit</th><th>Delete</th></tr>";
						while ($query_row = mysql_fetch_assoc($query_run)) {
						$student = $query_row['name'];
						$roll = $query_row['roll'];
						echo '<tr><td>' . $i . '</td><td>' . $student . '</td><td>'. $roll . '</td><td><a href="edit.php?id='.$query_row['id'].'"><input type="submit" value="Edit" ></a></td><td><a href="delete.php?id='.$query_row['id'].'"><input type="submit" value="Delete" ></a></td></tr>';
						$i++;
					} echo "</table>";
				}}

					 ?>
					</div>
					
		</div><!-- #content -->
		
		<div id="footer">
			Copyright &copy projectyugam.esy.es
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
	
</body>

</html>