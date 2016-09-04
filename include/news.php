<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <?php
    $sql = "select * from news order by news_id desc limit 4";
    $result = mysqli_query($conn,$sql);
    ?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
<!--                <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>NEWS</b></div>-->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="demo1">
                                    <?php
                                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                        $date = date_create($row['date']);
                                        $ndate = date_format($date,"d-M-Y");
                                        $link = "<a href=" . '"event.php?id='.$row['event_id'] .'">'.$row['link'].'</a>';
                                        echo'<li class="news-item">';
                                        echo $ndate."&nbsp;&nbsp;&nbsp;&nbsp;".$row['news']."...&nbsp;&nbsp;&nbsp;&nbsp;".$link;
                                        echo'</li>';
                                    }
                                    ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-footer" style="background-color:#1EBB11"> </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
            pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>
</body>
</html>