<?php
include('./inc/header.php');
include('./inc/server.php');

?>
<div class="container">
    <div class="card mx-auto mt-5" style="max-width: 500px;">
        <div class="card-header bg-transparent mb-3">
            <h3>Login</h3>
        </div>
        <div class="container-fluid ">
            <?php foreach ($errors as $error) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $error ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }  ?>
        </div>
        <div class="card-body pt-0">

            <form action="./login.php" method="post">

                <div class="form-group">
                    <label for="eamil">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['userData']['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group ">
                    <input type="submit" class="btn btn-primary btn-block" value="Login" name="login">
                </div>
            </form>
        </div>
    </div>
</div>



<?php include('./inc/footer.php'); ?>