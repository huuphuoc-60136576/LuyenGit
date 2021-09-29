<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phim</title>
</head>
<body>
    <?php
        $dsMaPhim = array(
            array('SfZWFDs0LxA', 'fifty-gray-poster.jpg'), 
            array('oqxAJKy0ii4', 'squid-game-poster.jpg'), 
            array('aSiDu3Ywi8E', 'f9-poster.jpg')
        );

        $soBoPhim = count($dsMaPhim);
    ?>

    <?php
        for ($i=0; $i<$soBoPhim; $i++)
        {
            echo "
            <a href='hien-thi-video.php?maBoPhim=" . $dsMaPhim[$i][0] . "'>
                <img src='images/" . $dsMaPhim[$i][1] ."' alt='ảnh bị lỗi' width='150' height='250'>
            </a>
            ";
        }
    ?>
</body>
</html>