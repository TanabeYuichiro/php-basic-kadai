<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Classname{
        // クラスの特徴

        // プロパティの定義
        // 商品名
        public $name;
        // private $name;
        // 価格
        public $price;
        // カテゴリー
        public $category;
        // 在庫数
        public $stock;

        // メソッドの定義
        public function set_name(string $name){
            $this->name = $name;
        }
        public function show_name(){
            echo $this->name.'<br>';
        }

        // コンストラクタを定義
        public function __construct(){
            // 初期化の内容
        }

    }

    // ------------------------------------------------------------------
    // インスタンス化
    // $shampoo = new Classname();

    // $shampoo->name = 'シャンプー';
    // $shampoo->price = 500;
    // $shampoo->category = '頭';
    // $shampoo->stock = 3;
    
    // ------------------------------------------------------------------


    // 出力
    // echo $shampoo->name.'<br>';
    // echo $shampoo->price.'<br>';
    // echo $shampoo->category.'<br>';
    // echo $shampoo->stock.'<br>';



    // ------------------------------------------------------------------
    // メソッドへアクセスする
    // インスタンス化
    $coffee = new Classname();
    // プロパティにアクセスし、値を代入する
    $coffee->set_name('コーヒー');
    // プロパティにアクセスし、値を出力する
    $coffee->show_name();
    
    // ------------------------------------------------------------------

    ?>

    <?php
    class user{
        // クラスの定義

        // プロパティ
        private $name;
        private $age;
        private $gender;

        // コンストラクタ
        public function __construct(string $name, int $age, string $gender){
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }
    }

    // インスタンス化
    $user = new User('侍太郎', 36, '男性');

    // インスタンス$userの各プロパティの値を出力する
    print_r($user);
    ?>
</body>
</html>