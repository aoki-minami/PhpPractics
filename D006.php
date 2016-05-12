<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $m = explode(" ", $input_lines);

    $n = $m[0];
    echo $n . " ";
    for($i=1 ; $i < 10 ; $i++){
        echo $n += $m[1];

        if($i < 9){
            echo " ";
        }
    }
?>
