<?php
include("connection.php");
$uErr=$emailErr = $passwordErr  = "";
session_start();
if(!empty($_SESSION["mail"])){
header("location:dashboard.php?que=home");
}
if(isset($_POST["sub"])){
        $mail=trim($_POST["mail"]);
        $pass=trim($_POST["pass"]);
        $real=$pass;
        
    // email validation 
    if (empty($mail)) {
        $emailErr = "Please Enter Email Address.";
    } else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $mail)) {
        $emailErr = "Invalid Email Address.";
    }
    // password validation 
    if (empty($pass)) {
        $passwordErr = "Please Enter Password.";
    } 

        if($emailErr === "" && $passwordErr  === ""){
            $sel=mysqli_query($conn,"select * from users where email like '$mail'");
            if($sel){
                $arr=mysqli_fetch_assoc($sel);
                $pass=substr(sha1($pass),0,10);
                if($pass==$arr['password']){
                    session_start();
                    $_SESSION["mail"]=$mail;
                    header("location:dashboard.php?que=home");
                }
                else{
                     $uErr="Already registered";
                    // $uErr = "<span id='alert' class='alert alert-danger  w-100 text-center'>Password does not match</span>";
                }
                }
                else{
                    // $uErr = "<span id='alert' class='alert alert-danger   text-center'>no user</span>";
                    $uErr="no user";
                }
            }
            // else{
            //     // $uErr="pls fill all the fields";
            //     $uErr = "<span id='alert' class='alert alert-danger   text-center'>All fileds are mandatory</span>";
            // }
            }




?>   



<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="https://images.neosofttech.com/favicon.gif">


    <title>Admin_Panel</title>
<link rel="stylesheet" href="./css/form.css">
  

    
</head>
<section class="container">
      <section class="form">
      <form class="" method="POST">
          <ul>
            <li class="avatar">
              <!-- <img
                src="https://www.allthetests.com/quiz22/picture/pic_1171831236_1.png"
                alt=""
              /> -->
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9SPHGbT7zpUnQWxX6G23hhBVjxxAioJDoSNePax1i6FPVuO1bD2NweVg44RenkPB3vTI&usqp=CAU" alt="" class="src">
            </li>

            <li class="email">
              <label for="email">email</label>
              <input
                type="email"
                name="mail"
                id="email"
                placeholder="Enter email"
              />
              <span class="error"><?php echo $emailErr; ?></span>
            </li>
            
            
        <li class="password">
              <label for="password">Password</label>
              <input
                type="password"
                name="pass"
                id="password"
                placeholder="Enter password"
              />
              <span class="error"><?php echo $passwordErr; ?></span>
            </li>
            <li class="button">
              <input type="submit" value="Login" class="d1 d"  name="sub"/>
            </li>
            <li class="button">
              <!-- <input type="submit" value="New user" class="d1 d2" /> -->
              <a href="./register.php"  class="d1" > <input type="button" value="New user" class="d1 d2" ></a>
            </li>
            </ul>
        </form>
      </section>
      <section class="intro">
        <section class="cut"></section>
        <ul>
          <li>
            neo<span>SOFT</span>
            <span class="capital">technologies</span>
          </li>
        </ul>
      </section>
    </section>
  </body>
</html>
