<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $onions = ['name' => '玉ねぎ', 'price' => 200, 'Production area' => '北海道'];

    foreach($onions as $key => $value){
        echo "{$key}:{$value}<br>";
    }
    ?>
</body>
</html>