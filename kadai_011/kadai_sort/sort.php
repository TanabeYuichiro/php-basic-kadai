<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 配列を定義
    $nums = [15, 4, 18, 23, 10 ];

    // 関数の定義
    function sort_2way(array $arrays, bool $order){
        if($order == true){
            echo '昇順にソートします。<br>';
            sort($arrays);
            foreach($arrays as $array){
                echo $array.'<br>';
            };
        }
        elseif($order == FALSE){
            echo '降順にソートします。<br>';
            rsort($arrays);
            foreach($arrays as $array){
                echo $array.'<br>';
            };
        };
    };

    // 呼び出し
    sort_2way($nums,true);
    sort_2way($nums,false);
    ?>
</body>
</html>