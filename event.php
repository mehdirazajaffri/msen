<?php
include_once"include/header.php";
include_once"include/connection.php";

$id = $_GET['id'];
$sql = "select * from events where event_id =".$id;
$result = mysqli_query($conn,$sql);
?>

<br>
<div class="container">
    <div class="center">
         <?php
         while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
             $date = date_create($row['event_date']);
             $ndate = date_format($date,"d M Y");
             echo '<h2>' . $row['event_title']."&nbsp;&nbsp;".$ndate.'</h2>';
             echo'<p style="font-size: larger">'.$row['event_description'].'</p>';
             echo'<br>';
             echo '<div>';
                 echo '<img src="' . $row['event_ann'] . '" class="img-responsive center-block">';
             echo '</div>';
             echo'<br>';
             $link = $row['event_reg_link'];
             echo'<a href="'.$link.'">For Registration in an Event</a>';
         }
         ?>
</div>

</div>

<?php
include_once "include/links_buttom.php";
include_once"include/footer.php";
?>