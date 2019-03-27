<?php
//変数を定義
session_start(); //セッション変数に配列を配置
$_SESSION['cards'] = array("00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13");
$cards = $_SESSION['cards'];
$min = 0;
$max = 13;
$left_card_num = rand($min, $max);
//ヘッターを出力
include ('header.php');
?>

<!--画像出力-->
<div>
  <img class="position_left" src="cards/<?= $cards[$left_card_num] ?>.png">
  <img class="position_right" src="cards/bg.png">
</div>
<!--フォーム-->
<form action="result_page.php" method="post">
  <div class="high">
    <input type="radio" name="select" value="High" required="required">
    <span>High</span>
  </div>
  <div class="low" >
    <input type="radio" name="select" value="Low" required="required">
    <span>Low</span>
  </div>
  <div>
    <input class="hidden" type="hidden" name="leftCard" value="<?= $left_card_num ?>">
  </div>
  <div>
    <input type="submit" value="決定">
  </div>
</form>

<?php include ('footer.php'); ?>
