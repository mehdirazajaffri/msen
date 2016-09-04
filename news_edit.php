<?php
require_once 'include/connection.php';
include'sessioncheck.php';

if(isset($_POST['submit'])){

    $link = mysqli_real_escape_string($conn,$_POST['link']);
    $news = mysqli_real_escape_string($conn,$_POST["news"]);
    $date = date('Y-m-d');
    $event_id = $_POST['ideve'];

    $my_id = $_GET ['id'];

    $sql = "update news set news='$news'
,link ='$link',date='$date', event_id='$event_id'
 where news_id='$my_id'";

    mysqli_query($conn,$sql);

    header("location:edit_news.php");

}
