<?php
	session_start();

	include("connect.php");

	$sql = "INSERT INTO tbl_shop (shop_name, shop_detail, shop_address, shop_sdistrict, shop_district, shop_province, shop_tel, user_id )
		    	VALUES ('".$_POST["upload_name"]."',
                  '".$_POST["upload_detail"]."',
                  '".$_POST["upload_address"]."',
                  '".$_POST["upload_sdistrict"]."',
                  '".$_POST["upload_district"]."',
                  '".$_POST["upload_province"]."',
                  '".$_POST["upload_tel"]."',
                  '".$_POST["upload_user_id"]."'
                )";

	$query = mysqli_query($conn,$sql);

	if($query) {
		$message = "Record add successfully!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=../showdisplay/selectshop.php'>";
		exit();
	}

	mysqli_close($conn);

?>
