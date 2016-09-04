<?php
include_once"include/header.php";
include_once"include/connection.php";

$sql = "select * from events where `event_id` =".$_GET['id'];
$result = mysqli_query($conn,$sql);

?>

<br>
<br>
    <div class="container">

        <?php
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                $date = date_create($row['event_date']);
                $ndate = date_format($date,"d F Y D");
                echo'<div class="center">';
                echo '<h2>' . $row['event_title'] . ' –' .$ndate.' </h2>';
                echo'</div>';

                echo'<div>';
                echo'<p style="font-size: larger">'.$row['event_details'].'</p>';
                echo'</div>';
            }
        ?>
    </div>

<section id="portfolio">
<div class="container">
<div class="row">

    <?php

$sql = "SELECT * FROM `event_pictures` WHERE `event_id` =".$_GET['id'];
$result = mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    echo'<div class="col-md-4" style="padding-left: 2px; padding-right: 2px;">';
    echo' <div class="recent-work-wrap">';
    echo' <a class="preview" href="uploads/'.$row['picture_name'].'" rel="prettyPhoto"><img class="img-responsive" style=" padding-bottom: 5px;" src="uploads/'.$row['picture_name'].'" alt=""></a>';
    echo'</div>';
    echo'</div>';
}
?>
</div>
</div>
</section>

<?php
include_once "include/links_buttom.php";
include_once"include/footer.php";
?>