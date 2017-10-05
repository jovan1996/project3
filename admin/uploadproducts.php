<?php
if(!isset($_SESSION['username'])){
    header('Location: index.php');
    exit();
}
?>
<h3 class="uploadform"> <br/></h3>
<form name="form1" action="" method="POST" enctype="multipart/form-data" class="uploadform">
<table>
	<tr>
		<td>Product name:</td>
		<td><input type="text" name="pname"></td>
	</tr>
    <tr>
		<td>Product price</td>
		<td><input type="text" name="pprice"></td>
	</tr>
	<tr>
		<td>Product category</td>
		<td>
			<select name="pcategory">
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
		<td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
	</tr>
</table>
</form>

<?php if(isset($_POST['submit1'])){
$fnm=$_FILES["pimg"]["name"];
$dst="images/".$fnm;
move_uploaded_file($_FILES["pimg"]["tmp_name"], $dst);
mysqli_query($dbc,"INSERT INTO items
VALUES('','$_POST[pname]',$_POST[pprice],'$_POST[pcategory]')");
}

 ?>
