<footer>
<section class="grid-m-12">
	<ul>
<?php
$query=mysqli_query($dbc,"SELECT * FROM socialnetworks");
$count = mysqli_num_rows($query);
while ($row = mysqli_fetch_assoc($query)){
echo "<li><a target='_blanc' title='".$row['name']."' href='".$row['link']."'><i class='fa fa-3x fa-".$row['name']."' aria-hidden='true'></i></a></li> ";
} /* end of while */ ?>
</ul>
<br/>
</section>
	<section class="copyright">
		<a href="http://jovansomborski.com">Jovan Somborski</a>	<span> &copy; 2017 MYSHOP</span>
	</section>

</footer>

<?php
mysqli_close($dbc);
?>
