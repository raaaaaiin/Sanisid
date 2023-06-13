<?php
   include ("connection.php");
   $id = $_GET['id'];
   $res = mysqli_query($db, "Delete from ref_category where id = '$id'");
   	
   	echo "<script>alert('You successfully delete a category');</script>";
   	echo "<script>window.location=\"category_option.php\";</script>";
   ?>