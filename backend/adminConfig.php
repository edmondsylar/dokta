<?php
include_once "config.php";
$cur = new AppInit();
// Use this file to create useers for the system, You create a frontend view that can handle the entire process if
// you wish but for the time factor you can just pass credentials into this function to create a user in the database.

$cur->register('admin@dokta.com', 'App Administrator', 'admin');

// un comment the line below if you need to call the function from a different file or you can use the registration file that has
// already been configured to handle registration.
// $cur->register($email, $name, $password);

 ?>
