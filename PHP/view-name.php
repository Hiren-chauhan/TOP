<!--Header link Set -->
<?php include 'include-header.php'; ?>

<!-- Navigation bad set -->
<?php include 'header.php'; ?>

<!-- Main content -->

<?php
    // Database Connection
    include "connection.php";

    // show all namelist data
    $query = "SELECT `first_name` FROM `namelist`";
    $result = mysqli_query($con,$query);

    while (($row=mysqli_fetch_assoc($result))){
        echo "<li>".$row["first_name"]."</li>";
    }

    //database connection close
    include "close-connection.php";
?>