<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>

    <body>
        <p>
            <?php
            // クラスを定義
            class Food {
                // プロパティを定義
                private $name;
                private $price;

                // メソッドを定義
                public function show_price() {
                    echo $this->price;
                }

                // コンストラクタを定義
                public function __construct(string $name, int $price) {
                    $this-> name = $name;
                    $this-> price = $price;
                }
            }

            // インスタンスを作成
            $Food = new Food('potato',250);
            print_r($Food);
            
            echo '<br>';


            // クラスを定義
            class Animal {
                // プロパティを定義
                private $name;
                private $height;
                private $weight;

                // メソッドを定義
                public function show_heihgt() {
                    echo $this->height;
                }

                // コンストラクタを定義
                public function __construct(string $name, int $height, int $weight) {
                    $this-> name = $name;
                    $this-> height = $height;
                    $this-> weight = $weight;
                }
            }

            // インスタンスを作成
            $Animal = new Animal('dog',60,5000);
            print_r($Animal);
            

            
            echo '<br>';
            $Food->show_price();
            echo '<br>';
            $Animal->show_heihgt();
            ?>
        </p>
    </body>
</html>
