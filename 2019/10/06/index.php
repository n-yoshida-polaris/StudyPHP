<?php

#################################################################
#
# 指示に応じた表示になるよう、プログラムを追記して下さい。
#
#　　　　　　　
#　　　　　　　　　　　　注意：既存のプログラムを改変しないで下さい。
#################################################################

/* Q1：ここで[太郎は20歳]と表示されるように「プログラム行」を追記してください。 */
$taro_name = '太郎';
$taro_year = 10;
# ここの行にプログラムを追記して下さい。
echo $taro_name . 'は' . $taro_year . '歳。<br/>';

/* Q2：「太郎と健は同い年」と表示させるための「プログラム行」を追記してください。 */
$ken_name = '健';
$ken_year = 11;
# ここの行にプログラムを追記して下さい。
if ($taro_year == $ken_year) {
    echo '太郎と健は同い年<br/>';
}

/* Q3：「健は太郎より年上」と表示させるための「プログラム行」を追記してください。 */
# ここの行にプログラムを追記して下さい。
if ($ken_year < $taro_year) {
    echo '太郎は健より年上<br/>';
}

/* Q4：「あいうえお」という表示を100回表示させるための「プログラム行」を追記して下さい。 */
$max_loop = 10;
# ここの行にプログラムを追記して下さい。
for ($i = 0; $i < $max_loop; $i++) {
    echo 'あいうえお<br>';
}

/* 05: 「松本は35歳」の下に「遠藤は40歳」と表示されるように $human_list に配列を追記して下さい。 */
$human_list = [
    '田中' => 20,
    '緒方' => 25,
    '岸田' => 30,
];
$human_list['松本'] = 35;
# ここの行にプログラムを追記して下さい。
foreach ($human_list as $human => $years_old) {
    echo $human . 'は' . $years_old . '歳<br>';
}