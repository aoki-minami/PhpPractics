<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $n = $input_lines;

    for($i=1;$i<10;$i++){
        echo $n * $i;

        if($i < 9){
           echo " ";
        }
    }
?>
