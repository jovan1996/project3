<?php 
session_start();
session_destroy();
header('Location: http://project3.jovansomborski.com/index.php?page=1');
exit();

//ovde ne treba nista  vise da se pise !  :)
?>