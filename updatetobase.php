<?php
if(!isset($_SESSION['username'])){
    header('Location: index.php');
    exit();
}
$br=$_POST['id'];
echo '</br></br></br> <form action="" method="post">
    <table>
        <tr>
            <td></td>
            <td><input type="hidden" name="tbId" value="'.$br.'"> </td>
        </tr>
        <tr>
            <td for="tbName">New Name:</td>
            <td><input type="text" name="tbName" placeholder="NEW NAME"></td>
        </tr>
        <tr>
            <td><label for="tbPrice">New Price: </label></td>
            <td><input type="text" name="tbPrice" placeholder="New Price"></td>
        </tr>
         <tr>
            <td for="tbCategory">New Category:</td>
            <td>
                <select name="tbCategory">
                <option value="Protein">Protein</option>
                <option value="Noreactor">Noreactor</option>
                <option value="Creatine">Creatine</option>
                <option value="BCAA">BCAA</option>
            </select>
            </td>
        </tr>
        <tr>
      		<td>Product image</td>
      		<td><input type="file" name="pimg"></td>
      	</tr>
        <tr>
            <td align="center" colspan="2"><input type="submit" name="update" value="update"></td>
        </tr>
    </table>
</form>';
 ?>
