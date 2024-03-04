<?php

    //print_r($_FILES)
    //echo $_FILES['myfile']['name'];

    $src= $_FILES['myfile']['tmp_name'];
    $des= "upload/".$_FILES['myfile']['name'];
    
    if(move_uploaded_file($src, $des)){
        echo "Success";
    }else{
        echo "Error";
    }

?>
<html>
<head>
    <title>Profile Picture</title>
</head>
<body>
        <form method="POST" action="profile_Picture" enctype="multipart/form-data">
            Image: <input type="file" name="myfile" value="" /><br>
                    <input type="submit" name="Submit" value="Submit"/>
        </form>
</body>
</html>