 <?php
include 'conn.php';
include 'pay.php';


   $id= $_GET['id'];

   $q ="DELETE FROM `tbl_amount` WHERE id = $id ";

   mysqli_query($con, $q);

   header('location:pay.php');
?>