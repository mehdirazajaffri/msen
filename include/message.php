<?php
include_once"connection.php";
$sql = "select * from message order by message_id desc limit 1";
$result = mysqli_query($conn,$sql);
?>
        <div class="banner_holder">
            <div class="banner_holderImage">
        <div class="center wow fadeInDown animated" style="color: white;visibility: visible; -webkit-animation-name: fadeInDown; animation-name: fadeInDown;padding-top: 60px;">
            <h2 style="color: #ffffff;">Message of the Month</h2>
 <?php
           while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                echo'<p class="lead" style="padding-left: 50px;   padding-right:50px; text-align: -webkit-auto;">'.$row['message'].'</p>';
                echo'<p class="small pull-right" style="padding-right: 100px;">'.$row['message_by'].'</p>';
           }
?>
<!--<p class="lead"></p>-->
<!--<p class="small pull-right">Sheikh Isa Jahagnir</p>-->
        </div>
        </div>
        </div>
<style>
    .banner_holder{
        width: 100%;
        height: 300px;
        min-height: 200px;
        position: relative;
    }
    .banner_holderImage{
        height: 100%;
        position:relative;
        background:   url("include/bg4.jpg")no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>