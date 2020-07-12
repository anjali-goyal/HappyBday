<?php

$username=$_POST['username'];
$password=$_POST['password'];
$error="";
$success="";
if(!empty($username)){
	if(!empty($password)){
		if($username=="ani308"){
			if($password=="3014"){
				header("Location: ani.html");
				exit;
			}
			else{
				echo "Please enter correct password";
			}
		}
		else{
			echo "Username does not exist";
		}
	}
	else{
		echo "Please enter the password first";
		die();
	}

}
else{
	echo "Please enter username first";
	die();
}

?>
<?php

	$username=$_POST['username'];
	$password=$_POST['password'];
	$error="";
	$success="";

	if(isset($_POST['submit'])){
		if($username == "ani308"){
			if($password == "3014"){
				$error = "";
				$success = "Welcome Admin!";
				echo "<script> window.location.assign('ani.html'></script>"
		}
		else{
			$error = "Incorrect Password";
			$success= "";
	}
	}
	else{
		$error = "Username doesn not exist";
		$success = "";
}
}

?>