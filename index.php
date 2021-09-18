<?php

// 配列


$array = [1, 2, 3];

$array_2 = [
    ['赤', '青', '黄'],
    ['赤', '青', '黄'],
];


echo '<pre>';
var_dump($array_2);
echo '</pre>';

echo $array_2[1][1];

$array_member = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];

echo $array_member['hobby'];

$array_member_2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 185,
        'hobby' => 'サッカー'
    ]
];

echo '<pre>';
var_dump($array_member_2);
echo '</pre>';



?>

