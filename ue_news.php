<?php
include "include/admin-header.php";
include "sessioncheck.php";
include "include/connection.php";
?>
<div class="container">
<div id="news" class="modal-title">
    <h2 class="center" style="font-size: xx-large;">Update Ongoing Events</h2>
</div>

    <?php
    $id=$_GET['id'];
    $sql="select * from news where news_id='$id'";
    $query = mysqli_query($conn,$sql);
    $data=mysqli_fetch_array($query);
    ?>

<form action="news_edit.php?id=<?php echo $data['news_id'] ?>" method="post" enctype="multipart/form-data">

    <div class="control-group">
        News
        <textarea class="form-control" type="text" name="news" required><?php echo $data['news'];?></textarea>
    </div>

    <div class="control-group">
        Select the Event which is News For
        <?php
        $sql = "select * from events where event_date > NOW() ORDER BY `event_id` ASC ";
        $result = mysqli_query($conn,$sql);
        echo '<select class="form-control" name="ideve">';
        echo '<option value="-1">Select an Event</option>';
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            echo"<option value=".$row["event_id"].'>';
            echo $row['event_title'];
            echo"</option>";
        }
        echo '</select>';
        ?>
    </div>

    <div class="control-group">
        Link
        <input class="form-control" type="text" name="link" value="<?php echo $data['link'];?>">
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
<?php
include "include/links_buttom.php";
include "include/footer.php";
?>