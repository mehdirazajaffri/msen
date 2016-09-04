<?php
require_once 'include/connection.php';

if(isset($_POST['submit'])) {

    $errors = array();

    $name_array = $_FILES ['files'] ['name'];
    $tmp_name_array = $_FILES ['files'] ['tmp_name'];

    for ($i = 0; $i < count($tmp_name_array); $i++) {
        if (move_uploaded_file($tmp_name_array [$i], "uploads/".$name_array [$i])) {
            $sql = "INSERT INTO `slider` (`slider_image`, `slider_date`)
            VALUES ('$name_array[$i]' ,'1');";
            mysqli_query($conn,$sql);
            header("Location:index.php");
        }
    }
}