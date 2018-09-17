<?php

session_start();

  include("connect.php");

  $sql = "UPDATE tbl_user SET
  user_name = '".$_POST["update_name"]."',
  user_sername = '".$_POST["update_surname"]."',
  user_address = '".$_POST["update_address"]."',
  user_sdistrict = '".$_POST["update_sdistrict"]."',
  user_district = '".$_POST["update_district"]."',
  user_province = '".$_POST["update_province"]."',
  user_tel = '".$_POST["update_tel"]."',
  user_line = '".$_POST["update_line"]."',
  user_email = '".$_POST["update_email"]."',
  user_ig = '".$_POST["update_ig"]."'
  WHERE userid = '".$_POST["user_id"]."'";

  $query = mysqli_query($conn,$sql);

  if ($query)
  {

    echo "Edite Success !";
    header("location:../profile/datachange.php");

  }
  else
  {

    echo "Miss Recode !!";
    //header("location:../pages/page_editeuser.php");

  }

  mysqli_close($conn);

 ?>
