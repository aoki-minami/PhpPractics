<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $array = explode(" ", $input_lines);
    $s = substr($array[0], 0, 1);
    $t = substr($array[1], 0, 1);

    echo $s . "." . $t;
?>
