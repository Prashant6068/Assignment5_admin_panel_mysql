<?php
$uErr="";
if(isset($_POST["sub"])){
    $tmp=$_FILES["att"]["tmp_name"];
    $fname=$_FILES["att"]["name"];
    $ext=pathinfo($fname,PATHINFO_EXTENSION);
    $fn=$mail.".$ext";
    $path="uploads/$mail.$ext";
    $dest="uploads/";
    if(move_uploaded_file($tmp,$dest.$fn)){
    $chnge=mysqli_query($conn,"update users set image=$path where email like '$mail'");
    }
    else{
        // echo "Error";
        $uErr = "<span id='alert' class='alert alert-success   text-center'>upload error</span>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
    .form-si {
    width: 50%;
    max-width: 630px;
    margin-top:100px;
    margin-left: 25%;
}

        
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
</style>
       
    </head>


<form class="form-si p-4 bg-white " action="" method="POST" enctype="multipart/form-data">
    <div class="text-center">
        <h4 class="text-dark">Change Image</h4>
        <hr>
    </div>
    <div class="form-group">
        <label for="chng_img">Select Image</label>
        <input type="file" class="form-control" id="chng_img" name="att">
        
    </div>
    <button type="submit" class="btn btn-danger btn-block" name="sub">Change</button>

</form>
</body>
</html>