<?php
// 関数　echoは引数に複数の文字列を指定できる
function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 4);
echo $total;

// 関数　printは引数に文字列ひとつしか指定できない
function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total = addNumber(2, 3);
print $total;

// 問題
function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo $total . "点なので合格です";
  } else {
    echo $total . "点なので不合格です";
  }
}
echo (exam(80, 60, 90));

// 三角形・四角形・台形の面積を求める関数を定義して、面積を求める
function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);