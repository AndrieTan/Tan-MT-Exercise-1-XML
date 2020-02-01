  <?php

    $rss = '<?xml version="1.0" encoding="UTF-8"?>';
    $rss .= '<rss version="2.0">';
    $rss .= '<channel>';

    $connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820422") or die (mysqli_error($connect));
    $sql = "SELECT * FROM tbl_games";
    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));

    while($r=mysqli_fetch_assoc($query)) {
        extract($r);

        $rss .= '<Games>';
        $rss .= '<Name>' . $Name . '</Name>';
        $rss .= '<Genre>' . $Genre . '</Genre>';
        $rss .= '<Cost>' . $Cost . '</Cost>';
        $rss .= '<Rate>' . $Rate . '</Rate>';
        $rss .= '</Games>';
    }

    $rss .= '</channel>';
    $rss .= '</rss>';

    echo $rss;
?>
