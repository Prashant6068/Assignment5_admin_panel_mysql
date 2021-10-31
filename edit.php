<?php
error_reporting(0);
$uErr="";
if(isset($_POST["sub"])){
    $email=trim($_POST["mail"]);
    $uname=$_POST["uname"];
    $name=$_POST["name"];
    $age=$_POST["age"];
    $gen=$_POST["gender"];
    $city=$_POST["city"];


    // error variables 
$nameErr = $emailErr = $usernameErr  = $ageErr = $genderErr=$cityErr="";

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


// age validation 
if (empty($age)) {
$ageErr = "Please Enter your Age.";
}

// gender validation 
if (empty($gen)) {
$genderErr = "Please Select your Gender.";
}


    if(!empty($email) && !empty($uname) && !empty($name) && !empty($age) && !empty($city) && !empty($gen)){
    if(mysqli_query($conn,"update users set email='$email', uname='$uname',name='$name',age='$age',
    city='$city',gender='$gen' where id=$id")) {
    //    header("location:dashboard.php?que=profile");
    }
    else{
        // $uErr="Already registered";
        $uErr = "<span id='alert' class='alert alert-danger   text-center'>Already register</span>";
    }
}
else{
    $uErr = "<span id='alert' class='alert alert-danger   text-center'>All fields are mandatory</span>";
}
}
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    

    <style>
        /* .formEl{
            padding-left: 36%;
            padding-top: 8px;
        } */

        .p2{
        box-shadow: 5px 5px 10px black;
        
    }
   #alert{
        margin-left: 150px;
        text-align: center;
    }
	.form-si {
    width: 100%;
    /* max-width: 630px;
    margin: auto; */
    margin-top: 100px;
}

    </style>
</head>
   

     <div class="container my-5 pt-0 ">
    <form action="" method="POST" class="form-si p-4 bg-white p2 "  enctype="multipart/form-data">
    
     <div class="text-center">
                    <img src="https://w7.pngwing.com/pngs/584/762/png-transparent-computer-icons-share-icon-register-icon-black-silhouette-sign.png" class="mb-4" alt="" width="100px" height="100px">
                </div> 
                

                <h5 class="err"> <?php echo $uErr?></h5>



  <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="mail" 
		
		           placeholder="Enter email" value="<?php echo $mail;?>">
                   <small id="err" class="form-text text-danger"><?php echo $emailErr; ?></small>  
		   </div> 
           
  
   


  <div class="form-group">
		     <label for="Username">Username</label>
		     <input type="Username" 
		           class="form-control" 
		           id="Username" 
		           name="uname" 
		           
		           placeholder="Enter username" value="<?php echo $user_name;?>">
                   <small id="err" class="form-text text-danger"><?php echo $usernameErr; ?></small>
                </div>


  

  <div class="form-group">
  <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="<?php echo $name;?>"
			>
            <small id="err" class="form-text text-danger"><?php echo $nameErr; ?></small>
        </div>



  <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" 
				
					placeholder="Enter age" value="<?php echo $age;?>">
                    <small id="err" class="form-text text-danger"><?php echo $ageErr; ?></small>
                </div>

  



 <div class="form-group ">
                    <label for="gender">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Male"  <?php echo ($gender=="Male")?'checked':'';?>>
                        <label class="form-check-label" for="gender">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Female"   <?php echo ($gender=="Female")?'checked':'';?>>
                        <label class="form-check-label" for="gender">
                            Female
                        </label>
                    </div>
                    <small id="err" class="form-text text-danger"><?php echo $genderErr; ?></small>
                </div>


 
  <div class="form-group ">
      <label for="inputCity">City</label>
      <select id="inputCity" class="form-control" name="city"  value="<?php echo $city;?>">> 
        <option selected>Choose</option>
        <option>Mumbai</option>
		<option>khopoli</option>
		<option>kalyan</option>
		<option>badlapur</option>
      </select>
      <small id="err" class="form-text text-danger"><?php echo $cityErr; ?></small>
    </div>


 

 <div class="row">
            <div class="col-sm mb-2">
                <button type="submit" class="btn btn-danger btn-block " name="sub">Update</button>
				
			</div>
           
		
 </div>
  </div>

</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>