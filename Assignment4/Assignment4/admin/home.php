<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
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
    background-repeat: no-repeat;
    font-family: Comic Sans MS;
    min-width: 750px;
    background-color: #3A7DD8;
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
#data{
    width: 40%;
    height: auto;
}
	</style>
     <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<div id="wrapper">
		
		<div id="header">
		<h1>Home Page</h1>
		</div><!-- #header -->
		
		<div id="content">
                <?php 
                echo 'WELCOME ADMIN<br> <a href="logout.php"> <div id="form1">Log Out </a> </div>';
                ?>
                </div><br>
                    <div id="cont">
                    <?php 
                    $id=1;
                    $query="SELECT * FROM users ";
                    if($query_run= mysql_query($query)){
                      if(mysql_num_rows($query_run)==NULL)
                        echo "No users";

                    else{
                        $i=1;
                        echo "<table><tr><th>SL No</th><th>Username</th><th>Date of Birth</th><th>Email</th><th>Add Student</th><th>View Students</th></tr>";
                        while ($query_row = mysql_fetch_assoc($query_run)) {
                        $username = $query_row['username'];
                        $dob = $query_row['dob'];
                        $email=$query_row['email'];
                        echo '<tr><td>' . $i . '</td><td>' . $username . '</td><td>'. $dob . '</td><td>' .$email. '</td><td><a href="add.php?id='.$i.'"><input type="submit" value="Add New Student"></a></td><td><a href="form.php?id='.$i.'"><input type="submit" value="View Student" id="button"></a></td></tr>';
                        $i++;
                    } echo "</table>";
                }}

                     ?>
                     <div id="data"></div>
		</div><!-- #content -->
		
		<div id="footer">
			Copyright &copy projectyugam.esy.es
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->


</body>
</html>