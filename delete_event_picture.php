<?php
include"include/connection.php";
include"sessioncheck.php";

$id = $_GET ['id'];
$sql = "delete from event_pictures where picture_id='$id'";
$query = mysqli_query($conn,$sql);

header("location:update_event_gallery.php");
