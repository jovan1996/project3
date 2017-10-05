<?php
if(!isset($_SESSION['username'])){
    header('Location: index.php');
    exit();
}
if (isset($_POST['delete'])){
    $checkbox = $_POST['checkbox'];
    $count = count($checkbox);
    for($i=0;$i<$count;$i++){
        if(!empty($checkbox[$i])){ /* CHECK IF CHECKBOX IS CLICKED OR NOT */
        $id = mysqli_real_escape_string($dbc,$checkbox[$i]); /* ESCAPE STRINGS */
        mysqli_query($dbc,"DELETE FROM items WHERE item_id = '$id'"); /* EXECUTE deletequery AND USE ' ' (apostrophe) IN YOUR VARIABLE */
        } /* END OF IF NOT EMPTY CHECKBOX */
    } /* END OF FOR LOOP */
} /* END OF ISSET DELETE */

$deletequery = "SELECT * FROM items"; /* SELECT FROM items TABLE */
$deleteresult = mysqli_query($dbc,$deletequery); /* EXECUTE deletequery */

echo "<form action='' method='POST'>"; /* SUBMIT PAGE ON ITSELF */

echo "<table class='delete'>";
echo "<tr><th>Delete?<th></th></th><th>Name</th><th>Price</th><th>Category</th></tr>";
while ($row = mysqli_fetch_array($deleteresult)){ /* FETCH ARRAY */
    $id=mysqli_real_escape_string($dbc,$row['item_id']);
    echo "<tr><td><input type='checkbox' name='checkbox[]' value='$id'></td>";
    echo '<td><img width="40px" height="40px" src="images/'.$row["name"].'.jpg" alt="'.$row["name"].'" title="'.$row["name"].'"/></td>';
    echo "<td>" .$row['name']. "</td>";
    echo "<td>" .$row['price']. "</td>";
    echo "<td>" .$row['category']. "</td></tr>";
}
mysqli_free_result($deleteresult);
echo '<tr>
<td colspan="5" align="center"><input name="delete" id="delete" type="submit"  value=" DELETE "></td>
</tr>';
echo "</table> </form>";
?>
