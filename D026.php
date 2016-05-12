<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = 0;
    for($i=0 ; $i < 7 ; $i++){
        $n[$i] = trim(fgets(STDIN));
        if($n[$i] === 'no'){
            $count++;
        }
    }

    echo $count;
?>
