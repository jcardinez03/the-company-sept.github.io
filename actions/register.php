<?php

include '../classes/User.php';

// Create an Object
$user = new User;

// call the method
$user->store($_POST);

?>