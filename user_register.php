<?php
    include ("./partial/include-header.php");
    include ("./partial/header.php");
?>
<main>
<section class="" id="user_register">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="page-header">
                        <h2>Create User</h2>
                    </div>
                    <form id="form" method="post" action="user_create.php">
                        <div class="form-group mt-2">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group mt-2">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" name="contact" id="contact">
                        </div>
                        <div class="form-group mt-2">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-group mt-2">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                        </div>
                        <div class="mt-2">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</section>
</main>

<!-- User Validation JS here -->
<script src="public/asstes/JS/user_validation_js.js"></script>
<!-- Footer set here -->
<?php 
    include './partial/footer.php';
    include './partial/include-footer.php'; 
?>
