<?php include ('header.php'); ?>

<?php
$min = 0;
$max = 13;
$rand = rand($min, $max);
//$cardsに1~13を入れる
/*
$cards = "";
for($i = 1; $i <= 13; $i++){
  //echo $i.".png,";
$cards .= '"';
$cards .= sprintf("%02d",$i);
$cards .= '.png';
$cards .= '", ';
}
//$total_cardsにトランプ0~13.pngを入れる。
$total_cards = '"Jk.png", '.$cards;
rtrim($total_cards, ', ');
//var_dump($array);
echo $total_cards;
echo "<br />";
$card = array($total_cards);
echo $card[1];
*/

//妥協策
$cards = array("00.png", "01.png", "02.png", "03.png", "04.png", "05.png", "06.png", "07.png", "08.png", "09.png", "10.png", "11.png", "12.png", "13.png");
?>

<form action="process.php" method="post">
<!--画像出力-->
<img class="position_reft" src=cards/<?echo $cards[$rand];?>>
<img class="position_light" src=cards/bg.png>
<br>
<!--ラジオボタン-->
<div class="high"><input type="radio" name="select" value="High" required="required">High</div>
<div class="low" ><input type="radio" name="select" value="Low" required="required">Low</div>
<input class="hidden" type="hidden" name="leftCard" value="<?echo $rand; ?>">
<br>
<input type="submit" value="決定">
</form>
<?php include ('footer.php'); ?>
