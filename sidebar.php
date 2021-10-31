<!-- <ul class="list-group">
  <li class="list-group-item lis">
      <img src='<?php echo $path?>' height="100px" width="100px">
</li>
  <li class="list-group-item">
      <a href="?que=chngImg">Change img</a></li>
  <li class="list-group-item">
  <a href="?que=profile">Profile</a>
  </li>
  <li class="list-group-item"> 
      <a href="?que=edit">Edit profile</a></li>
  <li class="list-group-item"> 
      <a href="?que=logout">Logout</a></li>
</ul> -->
<?php include("./includes/head.php")?>

<section class="">
            <section class="vertical-nav bg-dark text-light shadow p-0" id="sidebar">
                <div class="text-center py-5 mt-4" id="sidebar">
                <img src='<?php echo $path?>' height="100px" width="100px">
                    
                    <div class="my-4">
                        <table class="mx-auto text-left" cellpadding="10">
                            <tr>
                                <!-- <td><i class="bi bi-house-fill"></i></td> -->
                                <!-- <td><a class="text-white" href="">Home</a></td> -->
                               <td> <a class="text-white" href="?que=chngImg">Change img</a></td>
                            </tr>
                            <tr>
                           <td> <a  class="text-white" href="?que=profile">Profile</a>
                            <tr>
                                <!-- <td><i class="bi bi-person-square"></i></td> -->
                                <td><a class="text-white" href="?que=edit">Edit profile</a></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </section>
</section>