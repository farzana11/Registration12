<?php

$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$phoneNumber  = $_POST['phoneNumber'];

$link = mysqli_connect("localhost",
    "root",
    "apple777",
    "student");

$query = "INSERT INTO `student`.`user` (
`first_name` ,
`last_name` , 'phone_number'
)
VALUES (
    '$firstName', '$lastName'
)";

mysqli_query($link, $query);

header('location:list1.php');