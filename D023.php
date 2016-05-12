<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    $s = str_split($n);

    $count = 0;
    foreach($s as $s_value){
        if($s_value === 'A'){
            $count++;
        }
    }

    echo $count;
?>
