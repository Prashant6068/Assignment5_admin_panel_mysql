<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">     
<!-- <?php include("./includes/head.php")?> -->
    </head>
    <style>
          .p2{
        box-shadow: 5px 5px 10px black;
      
       
    }
    .form-si{
        margin-top: 100px;
    }
   
    </style>
    <!-- <body class="text-center">
          <div>
         <h2 class="mt-3">Profile  <i class="bi bi-person-fill icon"></i></h2>
              <hr>
              <h4>Email : <?php echo $mail?></h4>
              <h4>UserName : <?php echo $user_name?></h4>
              <h4>Name : <?php echo $name?></h4>
              <h4>Age : <?php echo $age?></h4>
              <h4>City : <?php echo $city?></h4>
              <h4>Gender : <?php echo $gender?></h4>
              </div> -->
              <div class="container my-5  px-5 p1 ">
<form action="" method="POST" class="form-si p-4 bg-white p2" enctype="multipart/form-data">
    <h3 class="text-danger mb-4"><i class="bi bi-person-fill"></i>&nbsp;&nbsp;Profile:</h3>
    <table class="table table-bordered border border-danger table-striped  ">
    <tbody>
            <tr>
                <th>Email :</th>
                <td><?php echo $mail?></td>
            </tr>

            <tr>
                <th>UserName :</th>
                <td><?php echo $user_name?></td>
            </tr>
            <tr>
                <th>Name :</th>
                <td><?php echo $name?></td>
            </tr>
            <tr>
                <th>Age :</th>
                <td><?php echo $age?></td>
            </tr>
            <tr>
                <th>City :</th>
                <td><?php echo $city?></td>
            </tr>
            <tr>
                <th>Gender :</th>
                <td><?php echo $gender?></td>
            </tr>
            
            </tbody>
    </table>
</form>
      </body>
</html>