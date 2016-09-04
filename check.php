<?php
include'include/connection.php';
include'sessioncheck.php';

if(isset($_POST['submit'])){

    $img = 'uploads/'.date('Y-d-m').$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$img);

    $event_title = $_POST["event_title"];
    $event_description =  $_POST["event_description"];
    $event_details = $_POST["event_details"];
    $link = $_POST['registration'];

    $date = $_POST["date"];
    echo $date;

    $sql = "INSERT INTO `events` (`event_title`, `event_date`, `event_details`, `event_description`, `event_ann`,`event_reg_link`)
VALUES ('$event_title','$date','$event_details','$event_description','$img','$link');";

    mysqli_query($conn,$sql);

    var_dump($sql);

    header("Location:update_events.php");
}