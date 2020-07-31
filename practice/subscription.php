<?php
include "database.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $email = $_POST['email'];
 
    $insert = mysqli_query($db,"INSERT INTO `tblemp`(`email`) VALUES ('$email')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>
    
