<?php
include_once("../controller/sessioncheck.php");
?>
<center>
	<form>
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name=""/><br />
						New Password<br />
						<input type="password" /><br />
						Retype New Password<br />
						<input type="password"/>								
						<hr />
						<input type="button" value="Change" />     
						<a href="login.php">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>