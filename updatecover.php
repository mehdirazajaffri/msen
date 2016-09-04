<?php
include'include/connection.php';
include'sessioncheck.php';

$id = $_POST['id'];
echo $id;

$img = 'uploads/'.date('Y-d-m').$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$img);

$sql = "UPDATE `events` SET `event_picture`='$img' WHERE `event_id` =".$id;
mysqli_query($conn,$sql);

header("location:index.php");