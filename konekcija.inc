<?php 
$ime_servera="localhost";
$kor_ime="root";
$lozinka="";
$ime_baze="ski";
$dbc=new mysqli($ime_servera,$kor_ime,$lozinka,$ime_baze) OR die('error: ' .mysqli_connect_error());


/*


$ime_servera="188.93.126.8";
$kor_ime="php1";
$lozinka="2u3evehys";
$ime_baze="admin_ski";
$dbc=new mysqli($ime_servera,$kor_ime,$lozinka,$ime_baze) OR die('error'.mysqli_connect_error);
*/
?>