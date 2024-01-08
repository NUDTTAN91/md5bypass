<?php
    include("flag.php");
	error_reporting(0);
	highlight_file(__FILE__);

	if(isset($_GET['user']) && isset($_GET['pass'])){
		$user = $_GET['user'];
		$pass = $_GET['pass'];

		if($user != $pass && md5($user) == md5(md5($pass))){
			echo $flag;
		}else{
			echo "fail~~~";
		}

	}else{
		echo "please input the user and pass!"."\n";
	}
?>
