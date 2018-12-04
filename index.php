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

