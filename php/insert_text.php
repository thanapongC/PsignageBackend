<?php
	session_start();

	include("connect.php");

	$sql = "INSERT INTO tbl_text (text_name, text_content, shop_id, machine_id )
		    	VALUES ('".$_POST["text_name"]."','".$_POST["text_content"]."','".$_POST["shop_id"]."','".$_POST["machine_id"]."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		$message = "Record add successfully!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=../contentsmanagement/text.php'>";
		exit();
	}

	mysqli_close($conn);

?>
