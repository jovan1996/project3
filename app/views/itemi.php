/*
<main id="items">

<section class="search">

<form name="" method="POST">

<input type="search" name="search" placeholder="Search items"/>


</form>


</section>

<section id="grid" class="container-fluid">

  <?php
 $num_rec_per_page=6;
if(isset($_POST['search']) && !empty($_POST['search'])){
  $searchq=$_POST['search'];
  $searchq=preg_replace("#'[^0-9a-z]#i","",$searchq);
  $query=mysqli_query($dbc,"SELECT * FROM items WHERE name LIKE '%$searchq%'");
    $count = mysqli_num_rows($query);
    if($count == 0){
     echo'NO RESULTS';
    }
    else {
      while ($row = mysqli_fetch_assoc($query)) {
 echo '  <article class="item-cell">
<a  href="images/'.$row["name"].'.jpg"
data-lightbox="example-set" data-title="'.$row["price"].'">
<img src="images/'.$row["name"].'.jpg" alt="'.$row["name"].'" title="'.$row["name"].'"/></a>';
           echo '<p>'.$row["name"].'</p>';
           echo '<p>'.$row["price"]. ' RSD</p>';
           echo  '</article>';

}    }
}
else {

if (isset($_GET["plaginacation"])) { $plaginacation  = $_GET["plaginacation"]; } else { $plaginacation=1; };
$start = ($plaginacation-1) * $num_rec_per_page;


  $query=mysqli_query($dbc,"SELECT * FROM items LIMIT $start, $num_rec_per_page");

  while ($row = mysqli_fetch_assoc($query)) {
      echo '  <article class="item-cell">';
           echo '

<a  href="images/'.$row["name"].'.jpg"
data-lightbox="example-set" data-title="'.$row["price"].'">
<img src="images/'.$row["name"].'.jpg" alt="'.$row["name"].'" title="'.$row["name"].'"/></a>';
           echo '<p>'.$row["name"].'</p>';
           echo '<p>'.$row["price"]. ' RSD</p>';
           echo  '</article>';

}}
 ?>
<article id="plagination">
<ul>
  <?php

$sql = "SELECT * FROM items";
$rs_result = mysqli_query($dbc,$sql); //run the query
$total_records = mysqli_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);


for ($i=1; $i<=$total_pages; $i++) {

            echo "<li><a href='index.php?page=2&plaginacation=".$i."'>".$i."</a> <li>";
};

?>
</ul>
</article>
</section>
</main>
*/
