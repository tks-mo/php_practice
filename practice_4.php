<?php
// 課題1
// 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($x) {
    $result = $x * 2;
    return $result;
}

echo double(4);
echo "\n";

// 課題2
// $aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成してください

function add($a, $b) {
    $result = $a + $b;
    return $result;
}

echo add(4, 6);
echo "\n";

// 課題3
// $arrという配列の仮引数を持ち、数値が入った配列array(1, 3, 5, 7, 9)を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function multiply($arr) {
    $result = 1;
    foreach ($arr as $value) {
        $result *= $value;
    }
    return $result;
}

echo multiply(array(1, 3, 5, 7, 9));
echo "\n";

// 課題4
// 次のプログラムは、配列の中で1番大きい値を返すmax_arrayという関数を実装しようとしています。途中の部分を完成させてください。

function max_array($arr) {
    $max_number = $arr[0];
    foreach ($arr as $a) {
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array(array(8, 16, 32, 24));
echo "\n";

// 課題5
// 次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

// strip_tags
$text = "<p>文字列からHTMLおよびPHPタグを取り除きます</p>";
echo strip_tags($text);
echo "\n";

// array_push
$fruits = ["オレンジ", "レモン"];

array_push($fruits, "メロン", "マスカット");
print_r($fruits);

// array_merge
$color1 = ["青", "白"];
$color2 = ["緑", "紫"];

$color = array_merge($color1, $color2);
print_r($color);

// time
echo "現在のUnixタイムスタンプは、" . time();
echo "\n";

// mktime
$timestamp = mktime();
echo "2021年8月1日14時のUnixタイムスタンプは、" . mktime(14, 0, 0, 8, 1, 2021);
echo "\n";

// date
date_default_timezone_set('Asia/Tokyo');

echo date('Y/m/d');
echo "\n";
echo date('Y-m-d H:i:s');
echo "\n";
echo date('Y年m月d日 H時i分s秒');
echo "\n";