<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);

    if($n >= 1 && $n <= 9){
        echo "0" . "0" . $n;
    }elseif($n >= 10 && $n <= 99){
        echo "0" . $n;
    }else{
        echo $n;
    }
?>
