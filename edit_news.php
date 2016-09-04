<?php
include "include/admin-header.php";
include "sessioncheck.php";
include "include/connection.php";
?>

<div class="container">
<div class="row">
    <div class="modal-title">
        <h2 class="center" style="font-size: xx-large;">Edit News</h2>
    </div>
    <?php
    $sql = "select * from news order by news_id desc limit 3";
    $result = mysqli_query($conn,$sql);
    ?>

    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
        <tbody>
<?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $link = "<a href=".'"ue_news.php?id=' .
        $row['news_id'] .'">';

    $link1 = "<a href=".'"del_news.php?id=' .
        $row['news_id'] .'">';

    echo '<tr class="gradeC">';
    echo '<td>';
    echo $row['news'];
    echo '</td>';
    echo '<td>';
    echo "<a>";
    echo $link;
    echo "<div class='btn btn-info'>";
    echo "Edit";
    echo "</div>";
    echo "</a>";
    echo '</td>';
    echo '<td>';
    echo "<a>";
    echo $link1;
    echo "<div class='btn btn-danger'>";
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
</div>
<?php
include "include/links_buttom.php";
include "include/footer.php";
?>