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
 * else,elseif文
 */

//$ageという変数に、自分の年齢を代入してください。
$age = 31;

//if-else文を用いて、$ageが30以上の場合は「あなたは30歳以上です。」、
//$ageが30未満の場合は「あなたは30歳未満です。」とechoしてください。
if ($age > 30) {
  echo "あなたは30歳以上です。";
} elseif($age <= 30) {
  echo "あなたは30歳未満です。";  
}

?>


</body>
</html>

