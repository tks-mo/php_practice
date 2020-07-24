<?php
// 課題1
$name = "Takase";

if ($name == "Takase") {
    echo "私はあなたの名前です";
} else {
    echo "あなたの名前ではありません";
}
echo "\n";

// 課題2
$total = 0;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

// 課題3
$fruits = array("リンゴ", "オレンジ", "レモン", "メロン", "ブドウ");

foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}
echo "\n";

// 課題4
$start = 1;
$end = 100;

for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}
