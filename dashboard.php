<?php
include("connection.php");
session_start();
$mail=$_SESSION["mail"];
$sel=mysqli_query($conn,"select * from users where email like '$mail'");
$arr=mysqli_fetch_assoc($sel);
$id=$arr['id'];
$user_name=$arr['uname'];
$name=$arr['name'];
$password=$arr['password'];
$age=$arr['age'];
$gender=$arr['gender'];
$city=$arr['city'];
$path=$arr['image'];
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">     
   
   <style>
       /* .list-group-item{
           text-align: center;
           width:250px;
           height: 80px;
        background: transparent;
       }
       .side{
           height: 100vh;
       }
      .lis{
height: 150px;
       } */
   </style>
</head>
    

    <?php include("includes/head.php"); ?> 

<body class="body">
   
     <?php
    if (empty($mail)) {
        include("nav.php");
    ?>
        <div class="page_section px-5 m-5">
            <div class="page">



    <!-- <div class="col-sm-8"> -->
        <?php
        switch(@$_GET['que']){
            // case 'change':include("change.php");
            // break;
            
            // case 'profile': include("profile.php");
            // break;
            // case 'chngImg':include("changeImg.php");
            // break;
            // case 'edit':include("edit.php");
            
            case 'logout':include("logout.php");
            break;
        }
        ?>

    </div>
    
    <?php
    } else {
    ?>
    <section class="">
            <section class="vertical-nav bg-dark text-light shadow p-0" id="sidebar">
                <div class="text-center py-5 mt-4" id="sidebar">
                <img src='<?php echo $path?>'  width="125px" height="125px" class=" my-3 rounded-circle img-thumbnail shadow-sm" alt="">
                <p class="text-shadow text-danger lead font-weight-bold text-uppercase"><?php echo $name; ?></p>
                    <div class="my-4">
                        <table class="mx-auto text-left" cellpadding="10">
                            <tr>
                                <!-- <td><i class="bi bi-house-fill"></i></td> -->
                                <!-- <td><a class="text-white" href="">Home</a></td> -->
                               <td> <a class="text-white text-shadow text-decoration-none" href="?que=chngImg"><i class="bi bi-images"></i>&nbsp;&nbsp;Change Image</a></td>
                            </tr>
                            <tr>
                           <td> <a  class="text-white text-decoration-none" href="?que=profile"><i class="bi bi-person-fill"></i>&nbsp;&nbsp;Profile</a>
                            <tr>
                                <!-- <td><i class="bi bi-person-square"></i></td> -->
                                <td><a class="text-white text-decoration-none" href="?que=edit"><i class="bi bi-pen"></i>&nbsp;&nbsp;Edit profile</a></td>
                            </tr>
                            <tr>
                                <td><a class="text-white text-decoration-none" href="?que=change"><i class="bi bi-key"></i>&nbsp;&nbsp;Change password</a></td>
 

                            </tr>
                            
                            
                        </table>
                    </div>
                </div>
            </section>
            <section class="page_content" id="content">
                <!-- navbar -->
                <?php include("nav.php"); ?>
                <div class="page_section">
                    <div class="page">
                        <?php
                        switch (@$_GET['que']) {
                            case 'home': include("home.php");
            break;
                            case 'profile': include("profile.php");
                            break;
                            case 'chngImg':include("changeImg.php");
                             break;
                              case 'edit':include("edit.php");
                              break;
                             case 'change':include("change.php");
                           
                        }   
                        ?>
                    </div>
                </div>
            </section>
        <?php
    }
        ?>
    
    <script>
            $(() => {

                $("#sidebarCollapse").on("click", () => {
                    $("#sidebar, #content").toggleClass("active");
                });

                $("#agreeBtn").on('click', function() {
                    $("#agree").prop("checked", true);
                });

                $("#status").change(function() {
                    $("#hidden-status").val($("#status").val());
                });

            });
        </script>
        <?php include("./includes/script.php")?>

    </body>
</html>