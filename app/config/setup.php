<?php 
include "konekcija.inc";
include "app/functions/data.php";

if(isset($_GET['page'])){  //UBACUJE NAM VREDNOST IZ URL
	$pageid = $_GET['page'];
}
else{
	$pageid = 1;
}

//setup
$page=data_page($dbc,$pageid);

 ?>