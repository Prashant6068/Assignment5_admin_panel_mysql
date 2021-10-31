<!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-white" href="#">Details</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="?que=home">Home
        <i class="bi bi-house"></i> &nbsp;&nbsp;
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="?que=change">Change password
        <i class="bi bi-key"></i> &nbsp;&nbsp;
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Welcome : <?php echo $mail;?></a>
      </li>
    </ul>
  </div>
</nav> -->
<style>
  .nav-logo {
    height: 30px;
    width: 100px;
}

.logo {
    object-fit: cover;
    object-position: center;
}

.wel-logo {
    height: 150px;
    width: 360px;
}

.form-si {
    width: 100%;
    max-width: 630px;
    margin: auto;
}

.vertical-nav {
    min-width: 17rem;
    width: 17rem;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    transition: all .5s;
}

.page_content {
    width: calc(100% - 17rem);
    margin-left: 17rem;
    transition: all .5s;
}

#sidebar.active {
    margin-left: -12rem;
}

#content.active {
    width: calc(100% - 12rem);
    margin-left: 5rem;
}

.yellow {
    color: #ffc107;
}

@media screen and (max-width: 768px) {
    .content {
        position: relative;
        width: 98%;
        top: 0%;
        left: 0%;
        transform: translate(0%, 0%);
        margin: auto;
        margin-top: 25%;
    }

    .form-si {
        max-width: 420px;
    }

    .login-logo {
        display: none;
    }

    #sidebar {
        margin-left: -17rem;
    }

    #sidebar.active {
        margin-left: 0;
    }

    #content {
        width: 100%;
        margin: 0;
    }

    #content.active {
        margin-left: 17rem;
        width: calc(100% - 17rem);
    }

    .page_section {
        height: 100%;
        margin-top: 15%;
    }
}

</style>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">
    <!-- <button id="sidebarCollapse" type="button" class="btn btn-dark mr-3"><i class="bi bi-list"></i></button> -->
   
    <a href=""><img src="https://img.swapcard.com/?u=https%3A%2F%2Fcdn-api.swapcard.com%2Fpublic%2Fimages%2F375084d7f1694c8494cf1683b09374aa.png&q=0.8&w=400&h=200&m=fit" class="nav-logo logo" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item mx-3">
                <a class="nav-link  font-weight-bold text-uppercase" href="?que=home"><i class="bi bi-house-door-fill"></i>&nbsp;Home
                  </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link font-weight-bold text-uppercase">Welcome: <?php echo $mail; ?></a>
                </li>
                <!-- <li class="nav-item ml-3">
        <a class="nav-link font-weight-bold text-uppercase" href="?que=change">Change password
 
        </a>
      </li> -->
                <li class="nav-item ml-3">
                    <a class="btn btn-danger my-2 my-sm-0" href="logout.php">Log out</a>
                </li>
                

                


            </ul>
    </div></nav>
    <?php include("./includes/script.php")?>