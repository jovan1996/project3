<?php 
if(isset($_POST['login'])) {
	$pass=addslashes($_POST['password']);
	$us=addslashes($_POST['username']);
	$greske =array();

	$repass="/[A-Za-z]{2,19}/";
	$reus="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";

if(!preg_match($repass,$pass))	$greske[]="Error in password";
		
if(!preg_match($reus,$us))	$greske[]="Error in email";
			if(count($greske)==0){

				$q = "SELECT * FROM admin WHERE username = '$us' AND password = md5('$pass')";
				$r = mysqli_query($dbc, $q);
				if(mysqli_num_rows($r) == 1) {
				$_SESSION['username'] = $_POST['username'];
				setcookie($us, time() + (86400*30), "/");
				header('Location: index.php');
			}	
		else
		{	echo "<script type='text/javascript'>alert('YOU SHALL NOT PASS!!!');</script>";	}
		}
}
 ?>

<form method="post"  action="" onsubmit="return provera()" name="formica"> 
<table class="tblogin">
 <th> </th><tr><td>
 <label for="username">MAIL:</label></td>
   <td><input type="text" name="username">
   </td> </tr> <tr> <td>
 <label for="password">PASSWORD</label></td> <td> <input type="password" name="password">
 </td> </tr> <tr><td>
 <input class="btnlog" type="submit" value="Log In" name="login" />
 </td></tr> </table> </form>

