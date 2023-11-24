<?php
include "connection3.php";

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phno = $_POST["phno"];
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];

    $sql="INSERT INTO `cart`(`name`, `emai`, `phone number`,`address`,`pincode`) VALUES ('$name','$email','$phno','$address','$pincode')";
    $result= mysqli_query($conn,$sql);
    if($result){
        echo "<script> alert('Order has been placed')</script>";
         header("Location: product1.php");
    }
    else{
        echo "<script>alert('Invalid data')</script>";
    }

}
?>