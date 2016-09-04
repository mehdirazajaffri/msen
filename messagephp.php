<?php
require_once 'include/connection.php';
include_once'sessioncheck.php';

if(isset($_POST['submit'])){
        $message = $_POST["message"];
        $writer =  $_POST["writer"];
echo$message;
    echo$writer;
    $sql = "INSERT INTO `message` (`message`, `message_by`)
VALUES ('$message','$writer');";

    echo mysqli_query($conn,$sql);
    header("Location:index.php");
}