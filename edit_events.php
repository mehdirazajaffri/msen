<?php
include"include/admin-header.php";
include"include/connection.php";
include"sessioncheck.php";
?>
    <div class="container">
        <div class="row">
            <div class="span12">
        <div class="content">
            <div class="module">
                <div class="module-head">
                    <h2>Events</h2>
                </div>
                <div class="module-body table">
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                        <thead>
                        <tr>
                            <th>Event Title</th>
                            <th>Event Description</th>
                            <th>Event Date</th>
                            <th>Update</th>
                            <th>Delete</th>
                            <th>Gallery</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM `events`";
                        $result = mysqli_query($conn,$sql);

                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                            $link = "<a href=" . '"update_sel_event.php?id=' .
                                $row['event_id'] . '">';
                            $link1 = "<a href=" . '"delete_event.php?id=' .
                                $row['event_id'] . '">';
                            $link2 = "<a href=" . '"update_event_gallery.php?id=' .
                                $row['event_id'] . '">';
                            echo '<tr class="gradeC">';
                            echo '<td>';
                            echo $row['event_title'];
                            echo '</td>';
                            echo '<td>';
                            echo $row['event_description'];
                            echo '</td>';
                            echo '<td>';
                            echo $row['event_date'];
                            echo '</td>';
                            echo '<td>';
                            echo "<a>";
                            echo $link;
                            echo "<div class='pull-right btn btn-default'>";
                            echo "Update";
                            echo "</div>";
                            echo "</a>";
                            echo '</td>';
                            echo '<td>';
                            echo "<a>";
                            echo $link1;
                            echo "<div class='pull-right btn btn-danger'>";
                            echo "Delete";
                            echo "</div>";
                            echo "</a>";
                            echo '</td>';
                            echo '<td>';
                            echo "<a>";
                            echo $link2;
                            echo "<div class='pull-right btn btn-info'>";
                            echo "Update Gallery";
                            echo "</div>";
                            echo "</a>";
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div><!--/.module-->
            <br>

        </div><!--/.content-->
</div>
            </div>
    </div>

<?php
include"include/links_buttom.php";
include"include/footer.php";
?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-ui-1.10.1.custom.min.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
$('.datatable-1').dataTable();
$('.dataTables_paginate').addClass("btn-group datatable-pagination");
$('.dataTables_paginate > a').wrapInner('<span />');
$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
} );
</script>