<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

   for($i=0 ; $i < 5 ; $i++){
        $n[$i] = trim(fgets(STDIN));
   }

   echo max($n[0], $n[1], $n[2], $n[3], $n[4]) . "\n";
   echo min($n[0], $n[1], $n[2], $n[3], $n[4]);
?>
