<?php
include "../classes/user.php";

//Create an obj
$user = new User;

//Call the method 
$user->login($_POST);


?>