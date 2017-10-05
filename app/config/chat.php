<?php 
include "../../konekcija.inc";
include "../functions/data.php";
	$name=addslashes($_POST['namee']);
	$msg=addslashes($_POST['tbteharea']);
$insertchat="INSERT INTO chat (name,msg) VALUES ('$name','$msg')";
$runchat=mysqli_query($dbc,$insertchat);


$chat="SELECT * FROM chat ORDER BY id DESC";

$gochat=mysqli_query($dbc,$chat);

while ($row=mysqli_fetch_assoc($gochat)) {
echo "
<span class='chat1'> $row[name]</span>
<span class='chat2'>$row[msg]</span>
<span class='chat3'>".formatdate($row['date'])."</span><br/> <hr/>";
	
 } 

 ?>