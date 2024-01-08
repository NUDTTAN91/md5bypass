<?php
	error_reporting(0);
	highlight_file(__FILE__);
    include("flag.php");

	if(isset($_GET["pass"])){
		if($_GET["pass"] != hash("md4", $_GET["pass"])){
			die('fail~~~');
		}else{
			echo $flag;
		}
	}else{
		echo "please input the pass";
	}
?>
