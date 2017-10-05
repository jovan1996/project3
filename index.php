<?php
session_start();
require 'app/config/setup.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $page['title']?>  |  MyShop </title>
	<meta charset="utf-8">
	 <meta name="author" content= "Jovan Somborski, jovan.somborski28@gmail.com">
	 <meta name="description" content="MyShop! Nutrition! Healthy life!  <?php echo $page['description']?>" >
	 <meta name="keywords" content="MyShop, nutrition, healthy<?php echo $page['keywords']?>" >

	<?php include_once 'app/config/js.php';?>


	

</head>
<body>
<header>
<h1><strong>MyShop</strong></h1>
<nav>
<?php include "app/views/navmenu.php"; ?>
</nav>
</header>
<?php
$incl=addslashes($pageid);
$query=mysqli_query($dbc,"SELECT views FROM pages WHERE id='$incl'");
  while ($row = mysqli_fetch_assoc($query)) {
    include $row["views"];
}
?>

<br/>
<section class="clear"></section>

<?php include_once"app/views/footer.php"; ?>

</body>
</html>
