<?php
include_once"connection.php";
$sql = "select * from slider order by slider_id desc limit 3";
$result = mysqli_query($conn,$sql);
?>
<style>
.slick-slider {
	margin-bottom:0px;
}
</style>
<div class="autoplay">
       <?php
           while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					echo '<div><img style="width:100%;height:800px;" src="uploads/'.$row['slider_image'].'" /></div>';
           }
           ?>
</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
<script>
$(document).ready(function (){
$('.autoplay').slick({
  autoplay: true,
  autoplaySpeed: 2000,
});			
});
</script>