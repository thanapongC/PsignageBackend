<?php
	session_start();
	include("connect.php");
	$_POST['username'] = mysqli_real_escape_string($conn,$_POST['username']);
	$_POST['password'] = mysqli_real_escape_string($conn,$_POST['password']);

	$strSQL = "SELECT * FROM tbl_user WHERE username = '".$_POST['username']."'
			 			and	userpassword = '".$_POST['password']."' ";
	$query = mysqli_query($conn, $strSQL);
	$result = mysqli_fetch_array($query);
	if(!$result)
	{
			$message = "Username And Password Incorrect!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
	}
	else
	{
			$_SESSION["user_id"] = $result["user_id"];
			$_SESSION["user_name"] = $result["user_name"];
			$_SESSION["user_sername"] = $result["user_sername"];
			$_SESSION["user_address"] = $result["user_address"];
			$_SESSION["user_sdistrict"] = $result["user_sdistrict"];
			$_SESSION["user_district"] = $result["user_district"];
			$_SESSION["user_province"] = $result["user_province"];
			$_SESSION["user_tel"] = $result["user_tel"];
			$_SESSION["user_line"] = $result["user_line"];
			$_SESSION["user_email"] = $result["user_email"];
			$_SESSION["user_ig"] = $result["user_ig"];
			$_SESSION["shop_id"] = $result["shop_id"];
			$_SESSION["status"] = $result["status"];

			session_write_close();

			header("location:../showdisplay/show.php");

		}
	mysqli_close($conn);
?>
