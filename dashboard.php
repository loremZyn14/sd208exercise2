<?php
include('./inc/header.php');
include('./inc/server.php');
?>
<nav class="navbar navbar-light bg-light ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Laravel Explorer
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">   
                <a  class="nav-link" href="./dashboard.php?logout='1'">
                    Logout <span class="sr-only">(current)</span>
                    <i class="fa fa-sign-out"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <h4 class="container">Welcome <strong> <?php echo $_SESSION['userData']['firstname'] . " " . $_SESSION['userData']['lastname']  ?></strong></h4>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 p-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" width="100%" alt="">
        </div>
        <div class="col-md-6 jumbotron">
            <h4 class="mt-5 pt-5 ">Hi <strong> <?php echo $_SESSION['userData']['firstname'] . " " ?></strong></h4>
            <hr>
            <p>Be part of the community where we share our ideas and problems to have a productive community.</p>
            <h5>To be updated</h5>
            <p>We send an email in your email <strong><?php echo $_SESSION['userData']['email']?></strong>  </p>
            <button class="btn btn-lg btn-outline-danger px-5 mt-3"> Get Started</button>
        </div>
    </div>
</div>



<?php include('./inc/footer.php'); ?>