<?php session_start();  
include('condb.php');
 
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='member'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="logout.php">
	<h1>Member!!</h1>
	<h3> hello <?php echo $name; ?> : you are <?php echo $level; ?> </h3>
	<input type="submit" value="Logout">
	</form>
</body>
</html>