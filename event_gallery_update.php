<?php
include "include/admin-header.php";
include "sessioncheck.php";
include "include/connection.php";
?>

<div class="container">
    <div class="modal-title">
        <h2 class="center" style="font-size: xx-large;">Update Event Gallery</h2>
    </div>

    <form action="updategallery.php" href="index.php" method="post" enctype="multipart/form-data">
        <div class="module-body">
            <div class="control-group">
                Select an Event
                <?php
                $sql = "select * from events where event_date <= NOW() ORDER BY `event_id` ASC ";
                $result = mysqli_query($conn,$sql);
                echo '<select class="form-control" name="id">';
                echo '<option value="-1">Select an Event</option>';
                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo"<option value=".$row["event_id"].'>';
                    echo $row['event_title'];
                    echo"</option>";
                }
                echo '</select>';
                ?>
            </div>
            <div class="form-group">
                <div class="control-group">
                    <input type="file"name="files[]" class="btn btn-primary">
                </div>
                <div class="control-group">
                    <input type="file"name="files[]" class="btn btn-primary">
                </div>
                <div class="control-group">
                    <input type="file"name="files[]" class="btn btn-primary">
                </div>
                <div class="control-group">
                    <input type="file"name="files[]" class="btn btn-primary">
                </div>
                <div class="control-group">
                    <input type="file"name="files[]" class="btn btn-primary">
                </div>
            </div>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
            <br>
            <button type="submit" name="submit" class="btn btn-primary" >UPLOAD FILE</button>
        </div>
    </form>

    <div id="cover" class="modal-title">
        <h2 class="center" style="font-size: xx-large;">Update Event Cover</h2>
    </div>

    <form action="updatecover.php" href="index.php" method="post" enctype="multipart/form-data">
        <div class="module-body">
            <div class="control-group">
                Select an Event
                <?php
                $sql = "select * from events where event_date <= NOW() ORDER BY `event_id` ASC ";
                $result = mysqli_query($conn,$sql);
                echo '<select class="form-control" name="id">';
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
                Event Announcement
                <input type="file" name="image" class="btn btn-primary">
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary" >UPLOAD FILE</button>
        </div>
    </form>
</div>

<?php
include"include/links_buttom.php";
include"include/footer.php";
?>