<?php


if(isset($_SESSION['username']))
	{
$query=mysqli_query($dbc,"SELECT * FROM pages where status='admin' ORDER BY id DESC");
    $count = mysqli_num_rows($query);
  echo "
<section id='toggle-nav'>
	<i class='fa fa-3x fa-bars' aria-hidden='true'></i>
</section>
  <ul class='adminmenu'>";
      while ($row = mysqli_fetch_assoc($query)) {
 echo "<li><a href='index.php?page=".$row['id']."'>".$row['name']."</a></li>";}
echo "</ul>";
}
else {


$query=mysqli_query($dbc,"SELECT * FROM pages where status='user' ORDER BY id");

echo "
<section id='toggle-nav'>
	<i class='fa fa-3x fa-bars' aria-hidden='true'></i>
</section>
  <ul class='menu'>";
      while ($row = mysqli_fetch_assoc($query)) {
 echo "<li><a href='index.php?page=".$row['id']."'>".$row['name']."</a></li>";}
 echo "</ul>";
	}
?>
