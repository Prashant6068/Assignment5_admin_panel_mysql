<?php
// session login logic
session_start();
if (!empty($_SESSION["email"])) {
    header("location: dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <style>
        
        .p1{
    width: 600px;
    
   
    box-shadow: 5px 5px 10px black;
   background-color: #EDF6E5;
}
.lead{
    font-family:Georgia, 'Times New Roman', Times, serif;
  
}

.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
       
        
    </style>
<?php include("includes/head.php"); ?>

<!-- <body class="bg-dark">
    <div class="container content ">
        <div class="row ">
            <div class="col-md m-auto">
                <div class="container text-center ">
                    <p class="display-4 t1">Welcome!</p>
                    
                    
                </div>
            </div>
            <div class="col-md m-auto border rounded shadow">
                <div class="container text-left  m-3 t1">
                    <h4>You are registered successfully <h4>
                       <h3> for Login Click below</h3>
                    
                    
                 <a class="btn btn-dark" href="login.php">login</a>
                
                </div>
            </div>
        </div>
    </div> -->

    <section class=" content p1">
        <aside class="row">
            <!-- <div class="col col-sm col-md my-auto text-center border rounded shadow "> -->
                <div class="my-5 text-center ">
                <h4>You are registered successfully <h4>
                
                  
            
                    
                <p class="lead mb-4">Click here on below button to login </p>
                
                    <a href="./index.php" class="btn btn-danger btn-lg">Login</a>
                </div>
            </div>

            <!-- <div class="col col-sm col-md my-auto text-center border rounded shadow">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4nvOgQTC-t89xR6fC2vAJp9dQolOUx6aQaNDiLiBtxbbLlFDjtgWUJvXP_vml2SL7h5g&usqp=CAU" alt="">
               
            </div> -->

        </aside>
    </section>

    <!-- Bootstrap js jquery -->
    <?php include("includes/script.php"); ?>
    
</body>

</html>