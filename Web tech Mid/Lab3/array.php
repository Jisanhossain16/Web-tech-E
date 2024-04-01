<?php

// PHP script to search an element from an array

$std = ["id"=>"abc", "name"=>"123", "email"=>"xyz"]; 

$elementToSearch = "123";

$found = false;

foreach($std as $s) {

if($s == $elementToSearch) {

$found = true;

break;

}

}

if ($found) {

echo "true";

} else {

echo "false";
}
?>