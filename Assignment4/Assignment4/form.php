
<form action="login.php" method="POST">
	Name:<br><input type="text" name="name1" placeholder="Name *"  value="<?php if (isset($name1)) {echo $name1;} ?>" required><br>
	Roll No:<br><input type="text" name="roll" placeholder="Roll Number *"  value="<?php if (isset($roll)) {echo $roll;} ?>" required > <br>
	<input type="submit" value="Submit">
</form>
<form action="login.php"><input type="submit" value="Go Back" ></form>
