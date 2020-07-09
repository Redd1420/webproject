<?php
include('includes/connection.php');
    
    if (isset($_POST['send'])) {
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $comment=$_POST['comment'];
    
        $q = "INSERT INTO `tbl_comments`( `username`, `email`, `phonenumber`, `comment`) VALUES ( '$username','$email','$phonenumber','$comment')"; 

      $query = mysqli_query($connection,$q);
         if($query){
        ?>  
    <script type="text/javascript">
     alert("Comment Received");
    </script>
    <?php
    }
    else{
        ?>  
        <script type="text/javascript">
         alert("Comment Fail");
        </script>
        <?php
    }

    }

?>

 <div class="container">
    <div class="jumbotron">
        <h1>Marangu Water Management System (MAWAMAS)</h1>
    </div>
    <br><br>
</div>
<div class="container">
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6" >
            <p>MAWAMAS is a water campany, aimed
            to deliver a quality service to people especially
            in every area (field) within a city. 
        </p>
        <p>MAWAMAS has an organization structure which
            consist a board of directors from a range of low 
            skilled background to a professional backgroung.
            The management activities are controlled and managed 
            by a "Managing director".
        </p>
        <p>On going to Industrial Tanzania, MAWAMAS tries aittle
            best on troubleshooting water difficulties and
            making a reasonable water reliable.
        </p>
</div>
<div class="col-md-4" style="font-family: Comic Sans MS;">
    <div class="card">
        <div class="card-header"><h2>Board Directors</h2></div>
            <div class="card-body">
<ol>
<li>ALPHA</l1>
<li>COLLINS</li>
<li>IBRA</li>
<li>JIMMY</li>
<li>KANUWA</li>
 <img src="assets/images/tap4.PNG">
</ol>         
</div>
</div>
</div>

 