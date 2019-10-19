<?php

#################################################################
#
# 指示に応じた表示になるよう、プログラムを追記して下さい。
#
#　　　　　　　
#　　　　　　　　　　　　注意：問題部分のプログラムを改変しないで下さい。
#################################################################

/* このarray1は問題に利用します。改変しないで下さい。 */
$array1 = ['アメリカ', 'ドイツ', 'インド', 'カナダ', '日本', 'イタリア', '韓国', 'フランス', 'ウルグアイ'];

/* Q1：foreach と echo を利用して $array1 の [国名] を全て画面上に表示して下さい。 */
/* ************************** Q1:解答欄(開始) ************************** */
foreach ($array1 as $value) {
    echo "$value<br/>";
}

/* ************************** Q1:解答欄(終了) ************************** */
/* Q2：foreach を利用せずに上の $array1 の国名を全て画面上に表示して下さい。 */
/* ************************** Q2:解答欄(開始) ************************** */
for ($i = 0; $i < count($array1); $i++) {
    echo "{$array1[$i]}<br/>";
}

/* ************************** Q2:解答欄(終了) ************************** */
/* 03：foreach と if を 利用して $array1 の中から[ドイツ]だけを表示して下さい。 */
/* ************************** Q3:解答欄(開始) ************************** */
/* 回答例１ */
foreach ($array1 as $key => $value) {
    if ($key === 1) {
        echo $value;
        break;
    }
}

/* 回答例２ */
foreach ($array1 as $key => $value) {
    if ($value === 'ドイツ') {
        echo $value;
        break;
    }
}

/* ************************** Q3:解答欄(終了) ************************** */
/* Q4：foreach と if を 利用して $array1 の中から奇数番にあたる国名[アメリカ、インド、日本、韓国、ウルグアイ] を画面上に表示して下さい。*/
/* ************************** Q4:解答欄(開始) ************************** */
/* 回答例１ */
foreach ($array1 as $key => $value) {
    if (($key % 2) == 0) {
        echo "{$value}<br>";
    }
}
/* 回答例２ */
foreach ($array1 as $key => $value) {
    if (in_array($value, ['アメリカ','インド','日本','韓国','ウルグアイ'])) {
        echo "{$value}<br>";
    }
}
/* ************************** Q4:解答欄(終了) ************************** */