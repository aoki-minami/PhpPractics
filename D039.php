<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    for($i=0 ; $i < 3 ; $i++){
        $side[$i] = trim(fgets(STDIN));
    }

    if( ($side[0] === $side[1]) && ($side[0] === $side[2]) ){
        echo "YES";
    }else{
        echo "NO";
    }
?>
