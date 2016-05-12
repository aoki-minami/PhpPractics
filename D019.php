<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $n = explode(" ", $input_lines);

    echo substr($n[0], $n[1] - 1, 1);
?>
