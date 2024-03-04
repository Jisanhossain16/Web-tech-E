<?php
include_once("../controller/sessioncheck.php");
//require_once('../model/userModel.php');
session_start();
$user = getUser($_SESSION['user_name']); 

?>
<html>
<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="2" align="CENTER">Profile</td></tr>
		<tr><td>NAME</td><td><?php echo $user['name']?></td></tr>	
        <tr><td>User Name</td><td><?php echo $user['user_name']?></tr>
		<tr><td colspan="2" align="right"><a href=>Go Home</a></td></tr>
	</table>			
</center>
</html>