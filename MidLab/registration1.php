<?php
include_once("registrationCheck.php");

?>
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <table border = '1' width= 100%>
       
        <tr>
            <td colspan = "2">
                <center>
                    <form action="" method="POST" enctype="">


                        <h3>REGISTRATION</h3>
                        <hr>
                        <table border="0" cellspacing="0" cellpadding="0">


                            <tr>
                                <td><label for="First_name">First Name</label> </td>
                                <td> : <input type="text" name="firstname" value="<?php echo $firstname ?>"/> <span><?= $firstNameError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="Last_name">Last Name</label> </td>
                                <td> : <input type="text" name="lastname" value="<?php echo $lastname ?>"/> <span><?= $lastNameError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="email">Email</label> </td>
                                <td> : <input type="email" name="email" value="<?php echo $email ?>"/> <span><?= $emailError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="phone">Phone</label> </td>
                                <td> : <input type="text" name="phone" value="<?php echo $phone ?>"/> <span><?= $numberError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label> </td>
                                <td> : <input type="text" name="password" value="<?php echo $password ?>"/> <span><?= $passwordError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="confirmPassword">Confirm Password</label> </td>
                                <td> : <input type="text" name="confirmPassword" value="<?php echo $confirmPassword ?>"/> <span><?= $confirmPasswordError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="gender">Gender</label> </td>
                                <td> :
                                    <input type="radio" name="gender" value="Male" <?= ($gender && $gender == "Male") ?
                                                                                        'checked="checked"' : "";
                                                                                    ?> /> Male
                                    <input type="radio" name="gender" value="Female" <?= ($gender && $gender == "Female") ?
                                                                                            'checked="checked"' : "";
                                                                                        ?> /> Female
                                    <input type="radio" name="gender" value="Other" <?= ($gender && $gender == "Other") ?
                                                                                        'checked="checked"' : "";
                                                                                    ?> /> Other
                                                                                    <span><?= $genderError ?></span>
                                </td>
                            </tr>
                            
                        </table>
                        <div>
                            <p><?= $error ?></p>
                            <br>
                            <input type="submit" value="Sign Up" name="submit" />
                        </div>
                    </form>
                </center>
            </td>
        </tr>
        
    </table>
    
</body>

</html>