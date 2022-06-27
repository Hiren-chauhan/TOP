<!-- 
Project Name: Saving Name List
Author:tarif
Year:2022
Description: Listing  System
Company:Selft Study Project
-->

<!-- Header link Set -->
<?php include 'include-header.php'; ?>

<!-- Navigation bad set -->
<?php include 'header.php'; ?>

<!-- Main content -->
<mian>
<section class="h-100">
    <form id="myform" action="insert-name.php" method="post" onsubmit="return validateform()">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">

                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="helpId" placeholder="First Name" required >
                </div>
                <input type="submit" class="mt-3 btn btn-primary" value="Submit">
                <!--
                <button name="" id="" class="mt-3 btn btn-primary"  role="button">Submit</button>
            -->
            </div>
        </div>
    </form>
</section>
</main>

<!-- custom JS added Here -->

<script src="public/asstes/JS/customJS.js"></script>

<!-- Footer set here -->
<?php include 'footer.php'; ?>
<!-- Footer link set -->
<?php include 'include-footer.php'; ?>