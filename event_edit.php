<?php
include'include/connection.php';
include'sessioncheck.php';

if(isset($_POST['submit'])){

    $img = 'uploads/'.date('Y-d-m').$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$img);

    $my_id = $_GET ['id'];

    $event_title = $_POST["event_title"];
    $event_description =  $_POST["event_description"];
    $event_details = $_POST["event_details"];
    $link = $_POST['registration'];

    $date = $_POST["date"];

    $sql = "update events set event_title='$event_title'
,event_description='$event_description',event_date='$date', event_reg_link='$link',event_details='$event_details',event_ann='$img'
 where event_id='$my_id'";

    mysqli_query($conn,$sql);

    header("location:edit_events.php");

}