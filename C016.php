<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 入力される文字列を格納
    $str_base = fgets(STDIN);

    // 置き換える文字を配列に格納
    $sub = array('A'=>4, 'E'=>3, 'G'=>6, 'I'=>1, 'O'=>0, 'S'=>5, 'Z'=>2);

    // 置き換え
    $str_sub = strtr($str_base, $sub);

    // 置き換えた文字列を表示
    echo $str_sub;

?>
