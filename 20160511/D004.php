<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = (int)trim(fgets(STDIN) );

    echo "Hello" . " ";

    for($i=0 ; $i < $n ; $i++){
        echo $m[$i] = trim(fgets(STDIN) );
        if($i < $n - 1){
            echo ",";
        }else{
            echo ".";
        }
    }
?>
