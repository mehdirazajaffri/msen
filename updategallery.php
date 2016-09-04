<?php
include 'include/connection.php';
include 'sessioncheck.php';

$errors = array();

$name_array = $_FILES ['files'] ['name'];
$tmp_name_array = $_FILES ['files'] ['tmp_name'];

$id = $_POST['id'];

for ($i = 0; $i < count($tmp_name_array); $i++) {
    if (move_uploaded_file($tmp_name_array [$i], "uploads/".date("Y-d-m").$name_array [$i])) {

        $img = date("Y-d-m").$name_array [$i];
        $sql = "INSERT INTO `event_pictures` (`event_id`, `picture_name`)
VALUES ('$id','$img');";
        mysqli_query($conn,$sql);

        header("Location:index.php");
    }
}