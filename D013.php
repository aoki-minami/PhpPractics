<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $n = explode(" ", $input_lines);

    echo floor($n[0] / $n[1]);
    echo " ";
    echo $n[0] % $n[1];
?>
