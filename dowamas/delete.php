<?php
include 'conn.php';



   $id= $_GET['id'];

   $q ="DELETE FROM `tbl_account` WHERE id = $id ";

   mysqli_query($con, $q);

   header('location:adimine.php');
?>