<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    $rem = 21 % $n;

    if($rem !== 0){
        echo $rem;
    }else{
        echo $n;
    }
?>
