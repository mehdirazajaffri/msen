<?php
include"include/admin-header.php";
include"sessioncheck.php";

?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
    <div class="modal-title">
            <h3>Upload Slider</h3>
    </div>
        <form action="uploadslider.php" href="index.php" method="post" enctype="multipart/form-data">
            <div class="module-body">
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
                </div>
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                <br>
                <button type="submit" name="submit" class="btn btn-primary" >UPLOAD FILE</button>
                <br>
                <br>
                <a href="update_events.php" class="btn btn-primary" style="width: 125px;">Create Event</a>
                <br>
                <a href="event_gallery_update.php" class="btn btn-primary" style="width: 125px;">Update Event</a>
                <br>
                <br>
                <a href="logout.php" class="btn btn-danger" style="width: 125px;">Log Out</a>
            </div>
        </form>
    </div>
        <div class="col-md-8">
            <div class="modal-title">
                <h3>Update Message of The Month</h3>
            </div>
            <form action="messagephp.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    Message of the Month
                    <textarea class="form-control" cols="25" rows="15" name="message"></textarea>
                    <br />
                    Message By
                    <input class="form-control" type="text" name="writer">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </form>
        </div>
    </div>
</div>