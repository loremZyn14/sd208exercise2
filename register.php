<?php
include('./inc/header.php');
include('./inc/server.php');
?>
<div class="container">
    <div class="card mx-auto mt-5" style="max-width: 500px;">
        <div class="card-header bg-transparent">
            <h4>Register</h4>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <?php foreach ($errors as $error) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $error ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }  ?>
            </div>
            <form action="./register.php" method="post">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control " id="firstname" name="firstname" value="<?php echo $_POST['firstname'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $_POST['lastname'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $_POST['address'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <label for="eamil">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $_POST['email'] ?? '' ?>" required>
                </div>
                <div class="form-group">
                    <label for="email_confirm">Confirm Email</label>
                    <input type="text" class="form-control" id="email_confirm" name="email_confirm">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirm">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                </div>
                <div class="form-group ">
                    <input type="submit" class="btn btn-primary btn-block py-2 " name="register" value="Register">
                </div>
            </form>
        </div>
    </div>
</div>



<?php include('./inc/footer.php'); ?>