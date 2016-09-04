<?php
include "include/admin-header.php";
include "sessioncheck.php";
include "include/connection.php";
?>
    <div class="container">
        <div class="modal-title">
            <h2 class="center" style="font-size: xx-large;">Create Event</h2>
        </div>
        <form action="check.php" method="post" enctype="multipart/form-data">
            <div class="control-group">
                Event Title
                <input class="form-control" type="text" name="event_title" required>
            </div>
            <div class="control-group">
                Event Description
                <textarea class="form-control" placeholder="Description which will show on Home regarding event" cols="25" rows="3" name="event_description" ></textarea>
            </div>
            <div class="control-group">
                Event Details
                <textarea class="form-control" placeholder="Details Briefing about Event" cols="25" rows="9" name="event_details"></textarea>
            </div>
            <br>
            <div class="control-group">
                <input type="date" name="date" />
            </div>
            <br>
            <div class="control-group">
                Event Registration Link
                <input class="form-control" type="text" name="registration" required>
            </div>
            <div class="control-group">
                Event Announcement
                <input type="file" name="image" class="btn btn-primary" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Create Event</button>
        </form>

        <div id="news" class="modal-title">
            <h2 class="center" style="font-size: xx-large;">Update Ongoing Events</h2>
        </div>
        <form action="update_news.php" method="post" enctype="multipart/form-data">
            <div class="control-group">
                News
                <textarea class="form-control" type="text" name="news" required> </textarea>
            </div>

            <div class="control-group">
                Select the Event which is News For
                <?php
                $sql = "select * from events where event_date > NOW() ORDER BY `event_id` ASC ";
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
                Link
                <input class="form-control" type="text" name="link" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
<?php
include "include/links_buttom.php";
include "include/footer.php";
?>