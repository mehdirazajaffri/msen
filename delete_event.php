<?php
include"include/connection.php";
include"sessioncheck.php";

$id = $_GET ['id'];
$sql = "delete from events where event_id='$id'";
$query = mysqli_query($conn,$sql);

header("location:edit_events.php");
