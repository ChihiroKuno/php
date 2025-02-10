<?php
//  for文
for ($i = 1; $i <= 5; $i++) {
 echo $i * 2 . '<br />';
}

//  while文
$count = 0;

while ($count < 20) {
    $count += 1;
 echo $count . '<br />';
}

// while文　breakループ処理終了 continueスキップ
$count = 0;

while ($count <= 100) {
    if($count === 20) {
        break;
    }
    if($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . '<br />';
    $count++;
}

// do...while 少なくとも1回は処理をする
$num = 0;

do {
    echo 'num = ' . $num . '<br />';
    $num += 1;
} while ($num < 3);

// FizzBuzzゲーム for if
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}

// ２重ループ
for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
      echo "●";
    }
    echo "<br />";
  }