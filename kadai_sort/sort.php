<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題-sort</title>
</head>

<body>
    <p>
        <?php
            $array = [15, 4, 18, 23, 10];

        function sort_2way($array, $order) {
                if ($order === true) {
                    echo '昇順にソートします。<br>';
                    sort($array);// 配列を昇順にソート
                } else if($order === false) {
                    echo '降順にソートします。<br>';
                    rsort($array);// 配列を降順にソート
                }
                return $array;
        }
        
       
       
        $asc_array = sort_2way($array,true);
        foreach ($asc_array as $value) {
                echo $value . '<br>';
        }

        $desc_array = sort_2way($array, false);
        foreach ($desc_array as $value) {
                echo $value . '<br>';
        }
        ?>
    </p>

   
</body>

</html>