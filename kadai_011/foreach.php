<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎12章課題</title>
</head>

<body>
  <p>
    <?php
    $vegetable_data = [
    'name' => '玉ねぎ',
    'price' => '200',
    'location' => '北海道',
    ];

    // キーを日本語で出力する
    $key_japanese = [
      'name' => '名前',
      'price' => '値段',
      'location' => '産地',
    ];

    foreach ($vegetable_data as $key => $value) {
      echo "{$key_japanese[$key]} : {$value}<br>";
    }
    ?>
  </P>
</body>

</html>
