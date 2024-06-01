<?php
$con = mysqli_connect('localhost', 'root', '', 'FoodOrderingWebsite');

if (!$con) { 
    die("Connection failed: " . mysqli_connect_error());
}

$fname = $_POST['fname'];
$femail = $_POST['femail'];
$fphone = $_POST['fphone'];
$fadd = $_POST['fadd'];
$forder = $_POST['forder'];

$query = "INSERT INTO FoodOrderingWebsite (fname, femail, fphone, fadd, forder) VALUES ('$fname', '$femail', '$fphone', '$fadd', '$forder')";

if (mysqli_query($con, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

mysqli_close($con);
header('location:./contact.php');
?>