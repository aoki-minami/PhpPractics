<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $s = fgets(STDIN);;

    $count=0;
    for($i='A' ; $i <= $s ; $i++){
        $count++;
        if($i === 'Z'){ break; }
    }
    echo $count;
?>
