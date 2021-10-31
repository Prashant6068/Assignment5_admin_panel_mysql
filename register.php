<?php
include("connection.php");
error_reporting(0);
$uErr="";
if(isset($_POST["sub"])){
    $email=trim($_POST["mail"]);
    $uname=$_POST["uname"];
    $name=$_POST["name"];
    $pass=trim($_POST["pass"]);
    $age=$_POST["age"];
    $gen=$_POST["gender"];
    $city=$_POST["city"];
    $tmp=$_FILES["att"]["tmp_name"];
    $fname=$_FILES["att"]["name"];
    $ext=pathinfo($fname,PATHINFO_EXTENSION);
    $fn=$email.".$ext";


  
    $path="uploads/$email.$ext";
    $dest="uploads/";
// error variables 
$nameErr = $emailErr = $usernameErr = $passwordErr = $imageErr = $ageErr = $genderErr=$cityErr="";

    //mail validation
    if (empty($email)) {
        $emailErr = "Email is required.";
    } 
//name validation
if (empty($name)) {
    $nameErr = "Name is required.";
} else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
    $nameErr = "Only Characters and white spaces are allowed.";
}

  // username validation 
  if (empty($uname)) {
    $usernameErr = "Username is required.";
} else if (!preg_match("/^[a-z0-9_]+$/", $uname)) {
    $usernameErr = "Only Small Characters, Numbers and \"_\" are allowed.";
}
 // password validation 
 if (empty($pass)) {
    $passwordErr = "Password is required.";
} else if (!preg_match("/^[a-zA-Z0-9]{3,16}+$/", $pass)) {
    $passwordErr = "Length of password should be between 4, 16 characters.";
}

// age validation 
if (empty($age)) {
    $ageErr = "Please Enter your Age.";
}

// gender validation 
if (empty($gen)) {
    $genderErr = "Please Select your Gender.";
}
 // image validation 
 if (empty($tmp)) {
    $imageErr = "Please select png, jpg or jpeg file.";
}
else if($ext=="jpg" || $extt=="png"||$ext=="jpeg"){
    if(move_uploaded_file($tmp,$dest.$fn)){
        $imageErr="";
    }
        else{
            $imageErr= "file upload error";
        }
}
else{
    $imageErr= "Only jpg or png files are allowed";
}
        
if ($nameErr === "" && $emailErr === "" && $usernameErr === "" && $passwordErr === ""  && $ageErr === "" && $genderErr === "" && $cityErr=="") {
$pass=trim($pass);
$hashp=substr(sha1($pass),0,10);
    
    if(mysqli_query($conn,"insert into users(email,uname,name,password,age,gender,city,image) values
    ('$email','$uname','$name','$hashp','$age','$gen','$city','$path')")){
        $uErr="success";
        header("location:welcome.php");
    }
    else{
         $uErr="Already registered";
        // $uErr = "<span id='alert' class='alert alert-danger   text-center'>User Already register</span>";
    }
    }}
    
//     else{
//         $uErr = "<span id='alert' class='alert alert-danger   text-center'>File upload error</span>";
//     }
// }

// else{
//     // $uErr="pls fill all the fields";
//     $uErr = "<span id='alert' class='alert alert-danger   text-center'>All fields are mandatory</span>";
// }

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="https://images.neosofttech.com/favicon.gif">


<title>Admin_Panel</title>
        <link rel="stylesheet" href="./css//form.css">
   

        <style>
		/* .p2{
        box-shadow: 5px 5px 10px black;
        
    }
   #alert{
        margin-left: 150px;
        text-align: center;
    }
	.form-si {
    width: 100%;
    max-width: 630px;
    margin: auto;
}
body{
        background: #EF4B4B;
    } */
    </style>
</head>
    
    


    <!-- <h5 class="err"> <?php echo $uErr?></h5> -->

    



           <section class="container">
           <!-- <span class="error"> <?php echo $uErr?></span>  -->
      <section class="form">
      <!-- <span class="error"> <?php echo $uErr?></span>  -->
      <form action="" method="POST" class=""  enctype="multipart/form-data">
          <ul>
          <span class="error"> <?php echo $uErr?></span> 
          
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


    


           </li>
            <li class="username">
              <label for="username">Username</label>
              <input
                type="text"
                name="uname"
                id=" username "
                placeholder="Enter username"
              />
              <span class="error"><?php echo $usernameErr; ?></span>
            </li>




        <li class="name">
              <label for="name">Name</label>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Enter name"
              />
              <span class="error"><?php echo $nameErr; ?></span>
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

                <li class="age">
              <label for="age">Age</label>
              <input
                type="number"
                name="age"
                id="age"
                placeholder="Enter age"
              />
              <span class="error"><?php echo $ageErr; ?></span>
            </li>
  
  

                <li class="gender">
              <label for="gender">Gender</label>
              <section class="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="Male" />
              </section>
              <section class="female">
                <label for="male">Female</label>
                <input type="radio" name="gender" id="female" value="Female" />
              </section>
              <span class="error"><?php echo $genderErr; ?></span>
            </li>

 

    <li class="city">
              <label for="city">City</label>
              <!-- <input
                type="text"
                name="city"
                id="city"
                placeholder="Enter city"
              /> -->
              <select id="inputCity" id="city" name="city" required>
                <option selected>Choose</option>
                <option>Mumbai</option>
                <option>khopoli</option>
                <option>kalyan</option>
                <option>badlapur</option>
              </select>
              <span class="error"><?php echo $cityErr; ?></span>
            </li>




        <li class="image">
              <label for="image">Image</label>
              <input type="file" name="att" id="image" />
              <span class="error"><?php echo $imageErr; ?></span>
            </li>
            <li class="button">
              <input type="submit" value="Register"  class="p1" name="sub"/>
              <!-- <input type="submit" class="p1" <a href="./index.php">login</a> -->
              <!-- <input type="submit"  class="p2" > login<a href="./index.php"></a>>  -->
              <a href="./index.php"  class="p2"> <input type="button" value="login" class="p2" ></a>
              <!-- <button type="submit " class="p1"><a href="./index.php"></a></button> -->
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



 