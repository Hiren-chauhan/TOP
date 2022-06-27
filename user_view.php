<?php
    include ("./partial/include-header.php");
    include ("./partial/header.php");
?>
<main>
<section class="h-100" id="user_register">
    <div class="contianer">
         <!-- User View data is here -->
        <?php
         include "./config/connection.php";

         // $query = "INSERT INTO users(first_name) VALUES ('$first_name')";
         $query = "select * from users_info"; // Fetch all the data from the table customers
         $result=mysqli_query($conn,$query);
        ?>
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
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
    include "./config/close-connection.php";
?>




<?php
    include "./config/connection.php";

    // GET POST data here
    $first_name = $_POST['first_name'];

    // $query = "INSERT INTO users(first_name) VALUES ('$first_name')";
    $query = "select * from users_info"; // Fetch all the data from the table customers

    if(!mysqli_query($conn,$query))
    {
        echo "Something go wrong......";
    }
    
    include "./config/close-connection.php";
?>