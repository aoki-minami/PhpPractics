<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $n = $input_lines;

    if($n % 2 === 0){
        echo 'even';
    }else{
        echo 'odd';
    }
?>
