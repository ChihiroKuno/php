<?php
// if文
$a = 5;

if ($a === 5) {
echo "\$aは5です";
}

// if〜else文
$a = 7;

if ($a === 5) {
echo "\$aは５です";
}else{
echo "\$aは５以外です";
}

// elseif　複数条件のどれかで異なる処理
$a = 7;

if ($a === 5) {
echo "\$aは５です";
}elseif ($a === 7) {
echo "\$aは７です";
}else{
echo "\$aは５と７以外です";
}

// switch文
$people = "Saburo";

switch ($people) {
case "Taro":
echo "太郎です";
break;
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}

// 三項演算子
$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;


