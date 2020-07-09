 <?php
include('includes/connection.php');
    
   if(isset($_SESSION["low"])){
    session_destroy();
    header("Location:../index.php?page=home");
} 
   
    if (isset($_POST['conc'])) {
     
    $date=$_POST['date'];
    $code=$_POST['code'];
     
    
                
       $q ="INSERT INTO `tbl_amount`(`date`,`code`) VALUES ( '$date','$code') ";

      $query = mysqli_query($connection,$q);
         if($query){
        ?>  
    <script type="text/javascript">
     alert("Payment Successful");
    </script>
    <?php
    }
    else{
        ?>  
        <script type="text/javascript">
         alert("Payment Fail");
        </script>
        <?php
    }

   }

?>


<div class="container">
    <div class="jumbotron">
        <h1>Welcome to Marangu Water Management System</h1>
        <h2>Confirm your payment code sent via M-PESA</h2>
        <a href="index.php?page=dash"><button type="button" class="btn btn-primary btn-lg" name="low">BACK</button></a>
    </div>
    <br><br>
</div>s
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><strong>Confirm your Payament</strong></div>
                <div class="card-body" >
                    <form action="" method="post" name="loginform" role="form">
                         <div class="form-group">
                        <input type="date" class="form-control" name="date" placeholder="enter a valid date" required>
                    </div>
                     
                    <div class="form-group">
                        <label for="code">Code number</label>
                                    <input type="password" class="form-control" name="code" id="pay" placeholder="enter a confimation code" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}" title="invalid confirmation code">
                 
                  <br><br>
                    <div class="form-group">
                         <button type="submit" name="conc"   class="btn btn-primary">SEND</button>
                        </div>
                    </form>
                     
                </div>
            </div>
        </div>
    </div>
    
</div>
<br><br><br><br><br><br><br><br> 



























?>