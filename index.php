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

?>

