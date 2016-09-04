<?php
include_once"connection.php";

$sql = "select * from events where event_date < NOW() ORDER BY `event_id` DESC limit 3";
$result = mysqli_query($conn,$sql);

?>

<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Recent Projects</h2>
        </div>
        <div class="row">
            <?php
                                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                        $date = date_create($row['event_date']);
                                        $ndate = date_format($date,"d F Y");
                                        $link = "<a href=" . '"portfolio.php?id='.$row['event_id'] .'">'.$row['event_title'].'</a>';
                                        echo'<div class="col-md-4">';
                                        echo'<div class="recent-work-wrap">';
                                        echo'<img class="img-responsive" src="'.$row['event_picture'].'" alt="">';
                                        echo'<div class="overlay">';
                                        echo'<div class="recent-work-inner">';
                                        echo'<h3>'.$link.'</h3>';
                                        echo'<p>'.$ndate.'</p>';
                                        echo'</div>';
                                        echo'</div>';
                                        echo'</div>';
                                        echo'<div class="caption">';
                                        echo'<h2 class="team">'.$row['event_title'].'</h2>';
                                        echo'<p class="lead">'.$row['event_description'].'</p>';
                                        echo'</div>';
                                        echo'</div>';
                                    }

            ?>
        </div>
    </div>
</section>