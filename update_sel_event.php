<?php
include "include/header.php";
include "sessioncheck.php";
include "include/connection.php";
?>

    <div class="container">
        <div class="modal-title">
            <h2 class="center" style="font-size: xx-large;">Edit Event</h2>
        </div>

        <?php
        $id=$_GET['id'];
        $sql="select * from events where event_id={$id}";
        $query = mysqli_query($conn,$sql);
        $data=mysqli_fetch_array($query);
        ?>

        <form action="event_edit.php?id=<?php echo  $data['event_id'] ?>" method="post" enctype="multipart/form-data">

            <h3 class="center" style="font-size: x-large"><?php echo $data['event_title'];?></h3>

            <div class="control-group">
                Event Title
                <input type="text" class="form-control" name="event_title" value="<?php echo $data['event_title'];?>" required>
            </div>
            <div class="control-group">
                Event Description
                <textarea class="form-control" cols="25" rows="3" name="event_description"><?php echo $data['event_description'];?></textarea>
            </div>
            <div class="control-group">
                Event Details
                <textarea class="form-control" cols="25" rows="9" name="event_details"><?php echo $data['event_details'];?></textarea>
            </div>
            <br>
            <div class="control-group">
                <input type="date" name="date" />
            </div>
            <br>
            <div class="control-group">
                Event Registration Link
                <input class="form-control" type="text" name="registration" value="<?php echo $data['event_reg_link'];?>" required>
            </div>
            <div class="control-group">
                Event Announcement
                <input type="file" name="image" class="btn btn-primary" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update Event</button>
        </form>
    </div>
<?php
include "include/links_buttom.php";
include "include/footer.php";
?>