<?php
include "connection2.php";

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql="INSERT INTO `conatact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
    $result= mysqli_query($conn,$sql);
    if($result){
        echo "<script> alert('Your Response has been submitted')</script>";
         header("Location: contact1.php");
    }
    else{
        echo "<script>alert('Invalid data')</script>";
    }

}
?>