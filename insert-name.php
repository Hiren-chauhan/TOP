<!--Header link Set -->
<?php include 'include-header.php'; ?>

<!-- Navigation bad set -->
<?php include 'header.php'; ?>

<!-- Main content -->

<?php
// Database Connection
    include "connection.php";
// Get Name
    $first_name= $_POST["first_name"];


//insert name into nameList table in database
$query="INSERT INTO `namelist`(`first_name`) VALUES ('first_name')";

    if(mysqli_query($con,$query))
    {
       echo $first_name. " " ."Save Successfully";
    }

//database connection close
include "close-connection.php";

?>