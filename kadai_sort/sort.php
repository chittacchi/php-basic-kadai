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
            if ($order === 'asc') {
                echo '昇順にソートします。<br>';
                sort($array);
            } else if ($order === 'desc') {
                echo '降順にソートします。<br>';
                rsort($array);
            }
            return $array; // ソート済み配列を返す
        }

        $asc_array = sort_2way($array, 'asc');
        foreach ($asc_array as $value) {
                echo $value . '<br>';
        }

        $desc_array = sort_2way($array, 'desc');
        foreach ($desc_array as $value) {
                echo $value . '<br>';
        }
        ?>
    </p>
</body>

</html>