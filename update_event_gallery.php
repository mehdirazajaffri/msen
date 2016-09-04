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
                                <th>Picture</th>
                                <th>Picture Name</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM `event_pictures` where `event_id` = '$id'";
                            $result = mysqli_query($conn,$sql);

                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                $link = "<a href=" . '"delete_event_picture.php?id=' .
                                    $row['picture_id'] . '">';
                                echo '<tr class="gradeC">';
                                echo '<td>';
                                echo '<img alt="picture" src="uploads/'.$row['picture_name'].'" width="70" height="70"  >';
                                echo '</td>';
                                echo '<td>';
                                echo $row['picture_name'];
                                echo '</td>';
                                echo '<td>';
                                echo "<a>";
                                echo $link;
                                echo "<div class='pull-right btn btn-danger'>";
                                echo "Delete";
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