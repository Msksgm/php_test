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

?>

