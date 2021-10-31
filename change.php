<?php
$uErr="";
if(isset($_POST["sub"])){
    $old=trim($_POST["pass"]);
    $newp=trim($_POST["newpass"]);
    $conf=trim($_POST["cpass"]);
    if(!empty($old) && !empty($newp) && !empty($conf)){
        $hashp=substr(sha1($old),0,10);
        if($password==$hashp){
            if($newp==$conf){
                $newp=substr(sha1($newp),0,10);
                $pswd=mysqli_query($conn,"update users set password='{$newp}' where email like '$mail'");
                $uErr="Success";
            }
            else{
                $uErr="Confirm password not matched";
            }
        }
        else{
            $uErr="Check your old password";
        }
    }
    else{
        $uErr="pls fill all the fields";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">     
   <?php include("./includes/head.php")?>
<style>
     form{
        box-shadow: 5px 5px 10px black;
      
}
    h4{
        text-transform: uppercase;
        font-weight: bolder;
        font-family: 'Times New Roman', Times, serif; 
    }
    label{
        font-weight: 600;
    }
    .form-si {
    width: 50%;
    max-width: 630px;
    margin-top:100px;
    margin-left: 25%;
}
</style>

</head>
    <!-- <body class="text-center">
    <form method="post">
        <h1 class="pt-5">Change password</h1>
        <div class="form-group d-flex flex-row justify-content-center pt-3"> -->
  
        <form class="form-si p-4 bg-white p2" method="POST">
    <div class="text-center">
        <h4 class="text-dark">Change Password</h4>
        <hr>
    </div>
  
        <!-- Old Password &nbsp;<input type="password" class="form-control col-lg-4" name="pass">
  </div>   -->


  <div class="form-group">
        <label for="pass">Old Password</label>
        <input type="password" class="form-control" id="password" name="pass" placeholder="Enter Password" >
       
    </div>

  <!-- <div class="form-group d-flex flex-row justify-content-center">
   New Password &nbsp; <input type="password" class="form-control col-lg-4" name="newpass">
  </div>    -->

  <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" class="form-control" id="password" name="newpass" placeholder="Enter password">

    </div>

  <!-- <div class="form-group d-flex flex-row justify-content-center">
   confirm password &nbsp; <input type="password" class="form-control col-lg-4" name="cpass">
  </div>  -->
  <div class="form-group">
        <label for="password">Confirm Password</label>
        <input type="password" class="form-control" id="password" name="cpass" placeholder="Enter password">
        
    </div>
 <!-- <input type="submit" value="submit" name="sub"><br/> -->
 <button type="submit" class="btn btn-danger btn-block" name="sub">Change Password</button>
    <?php echo $uErr; ?>

    </form>
    </body>
</html>