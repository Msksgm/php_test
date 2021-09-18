<?php


// 関数

function test(){
    echo 'test';
}

test();

$comment = 'コメント2';

function getComment($string){
    echo $string;
}

getComment('コメント');

getComment($comment);

function getNumberOfComment(){
    return 5;
}

$commentNumber = getNumberOfComment();

echo $commentNumber;

function sumPrice($int1, $int2) {
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPrice(2, 5);

echo $total;

$str = 'abc';

echo strlen($str);

$text = 'あいうえお';

echo mb_strlen($text);

// 文字列の置換

$str = '文字列を置換します';

echo str_replace('置換', 'ちかん', $str);

// 指定文字列で分割

$str_2 = '指定文字列で、分割します';

echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';

// imploade

// 正規表現

$str_3 = '特定の文字列が含まれるか確認する';

echo preg_match('/文字列/', $str_3);

// 指定文字列から文字列を取得する

echo mb_substr('あいう', 2);

// 配列の関数

// 配列に配列を追加する

$array = ['リンゴ', 'みかん'];

array_push($array, ["ぶどう"]);

echo '<pre>';
var_dump($array);
echo '</pre>';

$postalCode = '123-4567';

function checkPostalCode($str){
    $replaced = str_replace('-', '', $str);
    $length = strlen($replaced);

    if ($length === 7) {
        return true;
    }
    return false;
}

var_dump(checkPostalCode($postalCode));

// 変数のスコープ

global $globalVariable;

// ファイルの読み込み

require 'common.php';

echo __DIR__;
echo __FILE__;

?>

