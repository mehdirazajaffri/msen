<?php
require_once 'include/connection.php';

if(isset($_POST['submit'])){

    $link = mysqli_real_escape_string($conn,$_POST['link']);
    $news = mysqli_real_escape_string($conn,$_POST["news"]);
    $date = date('Y-m-d');
    $event_id = $_POST['id'];

    $sql = "INSERT INTO `news` (`news`, `date`,`link`,`event_id`)
VALUES ('$news','$date','$link','$event_id');";

    mysqli_query($conn,$sql);

    header("Location:admin.php");
}