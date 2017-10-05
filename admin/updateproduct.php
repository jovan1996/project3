
<?php
if(!isset($_SESSION['username'])){
    header('Location: index.php');
    exit();
}
if (isset($_POST['update'])){
  $tbId=$_POST['tbId'];
  $tbName=$_POST['tbName'];
  $tbPrice=$_POST['tbPrice'];
  $tbCategory=$_POST['tbCategory'];

$updatequery = "UPDATE items SET name='$tbName', price='$tbPrice', category='$tbCategory' WHERE item_id='$tbId'";

$queryy=mysqli_query($dbc,$updatequery);

}

$deletequery = "SELECT * FROM items";
$deleteresult = mysqli_query($dbc,$deletequery);

echo "<div class='wraper';><table class='delete'>";
echo "<th>update</th><th>Image</th><th>Name</th><th>Price</th><th>Category</th>";
while ($row = mysqli_fetch_array($deleteresult)){
    $id=mysqli_real_escape_string($dbc,$row['item_id']);
    echo "<tr><td><button id='".$row['item_id']."'  onclick='update(this.id)';> CHANGE<button></td>";
    echo '<td><img width="40px" height="40px" src="images/'.$row["name"].'.jpg" alt="'.$row["name"].'" title="'.$row["name"].'"/></td>';
    echo "<td>" .$row['name']. "</td>";
    echo "<td>" .$row['price']. "</td>";
    echo "<td>" .$row['category']. "</td></tr>";
}
mysqli_free_result($deleteresult);
echo "</table>";
?>
<style>

</style>
<div id="status">

</div>
<section id="update">



<section id="formupdate">



</section>


</div>
