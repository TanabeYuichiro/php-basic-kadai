<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // クラス:Food
    class Food{
        // クラス定義

        // プロパティ：「name」「price」
        private $name;
        private $price;

        // priceプロパティを出力する「show_price」メソッド
        public function show_price(){
            echo $this->price.'<br>';
        }

        // プロパティに値を代入するコンストラクタを作成する
        public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price =  $price;
        }

    }

    // インスタンス化
    $food = new Food('potato',250);

    // 出力
    print_r($food);
    echo '<br>';


    // クラス:Animal
    class Animal{
        // プロパティ：「name」「height」「weight」
        private $name;
        private $height;
        private $weight;

        // // heightプロパティを出力する「show_height」メソッド
        public function show_height(){
            echo $this->height.'<br>';
        }

        // プロパティに値を代入するコンストラクタを作成する
        public function __construct(string $name, int $height, int $weight){
            $this->name =  $name;
            $this->height =  $height;
            $this->weight = $weight;
        }
    }

    // インスタンス化
    $animal = new Animal('dog', 60, 5000);
    print_r($animal);
    echo '<br>';

    // それぞれのクラスに作成したメソッドにアクセスしメソッドを実行する
    $food->show_price();
    $animal->show_height();

    ?>
</body>
</html>