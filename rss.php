  <?php

    $rss = '<?xml version="1.0" encoding="UTF-8"?>';
    $rss .= '<rss version="2.0">';
    $rss .= '<channel>';

    $connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820422") or die (mysqli_error($connect));
    $sql = "SELECT * FROM tbl_games ORDER BY Game_ID ASC;";
    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
    while($records= mysqli_fetch_assoc($query)) {
        extract ($records);

        $rss .= '<game>';
        $rss .= '<name>' . $Game_Name . '</name>';
        $rss .= '<type>' . $Game_Genre . '</brand>';
        $rss .= '<cost>' . $Game_Cost . '</type>';
        $rss .= '<rate>' . $Game_Rate . '</cost>';
        $rss .= '</game>';
    }

    $rss .= '</channel>';
    $rss .= '</rss>';

    echo $rss;
?>
