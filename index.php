<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<?php
/**
 * continue文
 */
//for文を用いて1から1000までの数字をechoしてください。
//ただし、3の倍数の場合はechoせずにcontinueを用いて次の数字に飛んでください。
for ($i = 1; $i <= 1000; $i++) {
  if (($i % 3) == 0) {
    continue;
  }
  echo $i."<br>";
}

/**
 * break文
 */
//for文を用いて1から1000までの数字をechoしてください。
//ただし、501以上の数字を表示しないようにbreak文を用いてfor文を抜けてください。
for ($i = 1; $i <= 1000; $i++) {
  // echo $i."<br>";
  if ($i >= 500) {
    break;
  }
}

/**
 * while文
 */
$i = 2;
//while文と変数$iを用いて、2から100までの偶数をechoしてください。
while ($i <= 100) {
  // echo $i."<br>";
  $i += 2;
}

/**
 * for文
 */
//for文を用いて、51から100までの数字をechoしてください。
for ($i = 51; $i <= 100; $i++) {
  // echo $i."<br>";
}

/**
 * 連想配列
 */
//$scoresという連想配列を作り、数学というキーに数字の70を、
//英語というキーに数字の90を、国語というキーに数字の80を入れてください。
$scores = array (
  "数学" => 70,
  "英語" => 90,
  "国語" => 80,
);
$scores["国語"] += 5;
echo $scores['国語']."<br>";

/**
 * 配列
 */
//$colorsという配列を作り赤、青、黄を入れ$colorsの0番目をechoしてください。
$colors = array ("赤", "青", "黄");
echo $colors[0]."<br>";
//白を追加し、白を出力してください。
$colors[] = "白";
echo $colors[3]."<br>";

/**
 * switch文
 */

 //switch文を用いておみくじのゲームを作ってみましょう。
$num = 23;
//$remainderという変数に、%を用いて、$numを3で割ったときの余りを代入してください。
$remainder = $num % 3;
//remainderが0の場合は「大吉です。」
//・1の場合は「中吉です。」
//・2の場合は「小吉です。」
//・それ以外の場合(default)は「凶です。」とechoしてください。
switch ($remainder) {
  case 0:
    echo "大吉です。";
    break;
  case 1:
    echo "中吉です。";
    break;
  case 2:
    echo "小吉です。";
    break;
  default:
    echo "凶です。";
    break;
} 
// echo $remainder."<br>";



/**
 * &&、||
 */
$x = 1071;
//$xが3の倍数かつ7の倍数の場合はxは「3の倍数かつ7の倍数です。」
//それ以外で3の倍数の場合は「xは3の倍数ですが7の倍数ではありません。」
//それ以外で7の倍数の場合は「7の倍数ですが3の倍数ではありません。」
//それ以外の場合はxは「7の倍数でも3の倍数でもありません。」
//とechoしてください。
if ((($x % 3) == 0) && (($x % 7) == 0)) {
  echo "xは3の倍数かつ7の倍数です。<br>";
} elseif (($x % 3) == 0) {
  echo "xは3の倍数ですが7の倍数ではありません。<br>";
} elseif (($x % 7) == 0) {
  echo "xは7の倍数ですが3の倍数ではありません。<br>";
} else {
  echo "xは7の倍数でも3の倍数でもありません。<br>";
}

/**
 * else,elseif文
 */

//$ageという変数に、自分の年齢を代入してください。
$age = 31;

//if-else文を用いて、$ageが30以上の場合は「あなたは30歳以上です。」、
//$ageが30未満の場合は「あなたは30歳未満です。」とechoしてください。
if ($age >= 30) {
  echo "あなたは30歳以上です。";
} elseif($age <= 30) {
  echo "あなたは30歳未満です。";  
}

?>

</body>
</html>

