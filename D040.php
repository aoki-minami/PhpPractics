<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    for($i=0, $count=0 ; $i < 7 ; $i++){
        $pop[$i] = trim(fgets(STDIN) );

        if($pop[$i] <= 30){
            $count++;
        }
    }

    echo $count;
?>
