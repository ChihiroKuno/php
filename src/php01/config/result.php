<?php
// 自分の解答
// $text = htmlspecialchars($_GET['text'], ENT_QUOTES);

// $radio = htmlspecialchars($_GET['radio'], ENT_QUOTES);

// $number = htmlspecialchars($_GET['number'], ENT_QUOTES);

// print "私の名前は、" . $text . <br /> . "ご希望の商品は、" . $radio . <br /> . "ご注文は、" . $number;

$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number;