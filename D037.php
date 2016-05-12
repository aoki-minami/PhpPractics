<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $m = trim(fgets(STDIN));
    $n = trim(fgets(STDIN));
    $quo = floor($n / $m) ;
    $rem = $n % $m ;

    if($rem !== 0){
        $quo++;
    }

    echo $quo;
?>
