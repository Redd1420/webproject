 <?php
include('includes/connection.php');
include 'index.php?page=pay';


   $id= $_GET['id'];

   $q ="DELETE FROM `tbl_amount` WHERE id = $id ";

   mysqli_query($con, $q);
    header("Location:../index.php?page=pay");
   
?>