<?php
//変数を定義
session_start(); //セッション変数でcardsの配列を呼び出し
$cards = $_SESSION['cards'];
$min = 0;
$max = 13;
$right_card_num = rand($min, $max);

//左のカード
$left_card = $cards[$_POST['leftCard']];
//右のカード
$right_card = $cards[$right_card_num];
//選択結果
$post_select_result = $_POST['select'];

//数値比較の条件分岐
if($left_card < $right_card) {
  $result = "High";
} elseif($left_card == $right_card) {
  $result = $post_select_result;
} else {
  $result = "Low";
}

//選択結果を条件分岐
if($post_select_result == $result) {
  $message = "you win";
} else {
  $message = "you lose";
}
//ヘッダーを出力
include ('header.php');
?>

<!--画像出力-->
<div>
  <img class="position_left" src="cards/<?= $left_card ?>.png">
  <img class="position_right" src="cards/<?= $right_card ?>.png">
</div>
<!--選択内容出力-->
<div>
  <span>「<?= $_POST['select'] ?>」を選択しました。</span>
</div>
<!--勝敗結果出力-->
<div class="message">
  <?= $message ?>
</div>
<!--index.phpに戻る-->
<div class="one_more">
  <a href="index.php">もう一度挑戦する</a>
</div>

<?php include ('footer.php'); ?>
