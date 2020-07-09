 <?php
include('includes/connection.php');
include 'adimine.php';


   $id= $_GET['id'];

   $q ="DELETE FROM `tbl_comments` WHERE id = $id ";

   mysqli_query($connection, $q);

   
    header("Location:../index.php?page=adimine");
?>