<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
          public $name;
          public $price;
      
            // コンストラクタ
    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
  }

  // 価格を表示するメソッド
  public function show_price() {
      echo "$this->price  <br>";
  }
}
  // Animalクラスの定義
class Animal {
  public $name;
  public $height;
  public $weight;

  // コンストラクタ
  public function __construct($name, $height, $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
  }

  // 身長を表示するメソッド
  public function show_height() {
    echo "$this->height  <br>";
}
}

// インスタンスを作成
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

// インスタンスを出力
print_r($food);
print_r($animal);

// メソッドを実行
$food->show_price();
$animal->show_height();
?>
    </p>
</body>

</html>