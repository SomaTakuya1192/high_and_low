<?php include ('header.php'); ?>
<?php
$min = 0;
$max = 13;
$rand = rand($min, $max);
$cards = array("Jk.png", "01.png", "02.png", "03.png", "04.png", "05.png", "06.png", "07.png", "08.png", "09.png", "10.png", "11.png", "12.png", "13.png");
//左のカード
$leftCard = $cards[$_POST['leftCard']];
//右のカード
$rightCard = $cards[$rand];
//選択結果
$post_result = $_POST['select'];

//条件分岐
if($leftCard < $rightCard){
  $result = "High";
}elseif($leftCard == $rightCard){
  $result = $post_result;
}else{
  $result = "Low";
}
?>
<!--画像出力-->
<img class="position_reft" src=cards/<?echo $leftCard;?>>
<img class="position_light" src=cards/<?echo $rightCard;?>>
<br>
「<? echo $_POST['select']; ?>」を選択しました。
<br>
<?php
if($post_result == $result){
  echo "you win";
}else{
  echo "you lose";
}
?>
<br>
<a href="index.php">もう一度挑戦する</a>
<?php include ('footer.php'); ?>
