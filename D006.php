<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $n = explode(" ", $input_lines);

    if(strcmp($n[1], 'km') === 0){
        echo $n[0] * 1000 * 100 * 10;
    }

    if(strcmp($n[1], 'm') === 0){
        echo $n[0] * 100 * 10;
    }

    if(strcmp($n[1], 'cm') === 0){
        echo $n[0] * 10;
    }
?>
