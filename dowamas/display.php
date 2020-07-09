
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/vendors/bootstrap-v4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
</head>
<body>

<div class="image3.jpg">
   <div class="container">
      <nav class="navbar navbar-expand-sm navbar-dark bg-primary text-center ">
            <a class="navbar-brand text-center" href="#" >CUSTOMER INFORMATION</a>  
            
  
         </nav>
                
    <div class="row  d-flex justify-content-center"  >
    <div class="col-lg-12">
    
       <h1 class="text-warning text-center"> <strong>  CHECK YOUR INFOMATION CLEAR AND UPDATE</strong> </h1>
       <br><br>
       <p>Costomer will receive service one day after payment.</p>
       <p>If there will be delaying of Bills payments within a month; sevice will be blocked immedietly.</p>
       <p>NB: All update should be done by clicking the button below to you name </p>
          <br>
          <table class=" table table-striped table-hover table-bordered">
        
        <tr class="bg-dark text-white text-center">
          
          <th>Id</th>
          <th>Firstname</th>
          <th>Middle name</th>
          <th>Lastnane</th>
          <th>email</th>
          <th>phonenumber</th>
           
          <th>Update</th>

        </tr>

<?php

      include 'conn.php';
    
          
          $q = "  SELECT * FROM `tbl_account` ";

         $query = mysqli_query($con,$q);

         while($res = mysqli_fetch_array( $query)){

?>

        <tr class="text-center">
          
          <td><?php echo $res['id'];  ?></td>
          <td><?php echo $res['firstname'];  ?></td>
          <td><?php echo $res['middlename'];  ?></td>
          <td><?php echo $res['lastname'];  ?></td>
          <td><?php echo $res['email'];  ?></td>
          <td><?php echo $res['phonenumber'];  ?></td>
  
          <td> <a href="update.php?id=<?php echo $res['id']; ?>" class="btn btn-primary" role="button">Update</a> </td>
        </tr>
        <?php
          }


        ?>

       </table>
         
     </div>
   </div>

    </div>
    </div>
</body>
</html>