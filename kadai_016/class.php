<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class課題</title>
</head>
<body>
    <p>
        <?php
        //クラスを定義する
        class Food {
            //プロパティを定義する
            private $name;
            private $price;
            //メソッドを定義する
            public function show_price(int $price) {
                $this->price = $price;
                return $this->price;
            }
            //コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }
        //クラスを定義する
        class Animal {
            //プロパティを定義する
            private $name;
            private $height;
            private $weight;
            //メソッドを定義する
            public function show_height(int $height) {
                $this->height = $height;
                return $this->height;
            }
            //コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        //インスタンス化する
        $Food = new Food('potato', 250);
        $Animal = new Animal('dog', 60, 5000);

        //インスタンス$F00dの各プロパティの値を出力する
        print_r($Food);
        echo "<br>";
        //インスタンス$Animalの各プロパティの値を出力する
        print_r($Animal);
        echo "<br>";

        //メソッドにアクセスしてpriceプロパティの値を出力する
        echo $Food->show_price(250);
        echo "<br>";
        //メソッドにアクセスしてheightプロパティの値を出力する
        echo $Animal->show_height(60);



        ?>
    </p>   
        

