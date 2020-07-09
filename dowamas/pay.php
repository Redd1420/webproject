 <?php

include 'conn.php';
   
    $q = " SELECT * FROM `tbl_amount`";

      $query = mysqli_query($con,$q);

?>

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
            <a class="navbar-brand text-center" href="#" >PAYMENT REPORT</a> 
            <a href="adimine.php"><button type="button" class="btn btn-primary btn-lg">HOME</button></a>
           
       </nav>         
    <div class="row  d-flex justify-content-center"  >
    <div class="col-lg-12">
    
       <h1 class="text-warning text-center"> TABLE OF INFORMATION  </h1>
          <br>
       <table class=" table table-striped table-hover table-bordered">
        
        <tr class="bg-dark text-white text-center">
        <th>Id</th>
          <th>DATE</th>
           <th>Code number</th>
            
           
         

        </tr>

<?php

      include 'conn.php';
    
          
          $q = "  SELECT * FROM `tbl_amount` ";

         $query = mysqli_query($con,$q);

         while($res = mysqli_fetch_array( $query)){

?>

        <tr class="text-center">
        
          <td><?php echo $res['id'];  ?></td>
           
          <td><?php echo $res['date'];  ?></td>
          <td><?php echo $res['code'];  ?></td>
          
        
             
        <?php
          }


        ?>
       
       </table>
         
            

     </div>
   </div>

    </div>
    </div>
 


 

       
        </div>
    </div>
    
</div>
</body>
</html>