<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 人参のデータの数、目安となる糖分、許容誤差を格納
    $tmp = trim( fgets(STDIN) );
    $carrot = explode(" ", $tmp);
    $CARROT_NO = $carrot[0];
    $CARROT_SUGE = $carrot[1];
    $CARROT_ALLOWANCE = $carrot[2];

    // 人参の番号を表示する変数
    $display = 0;

    // 人参の質量を覚えておく変数
    $keep = 0;

    // 人参のデータの数分繰り返す
    for($i=0 ; $i < $CARROT_NO ; $i++){

        // 人参の質量、糖分を格納
        $tmp = trim( fgets(STDIN) );
        $carrot = explode(" ", $tmp);
        $weight = $carrot[0];
        $suger = $carrot[1];

        // 糖分が許容範囲内かどうか
        if($suger >= $CARROT_SUGER - $CARROT_ALLOWANCE && $suger <= $CARROT_SUGER + $CARROT_ALLOWANCE){
             if($keep < $weight){
               $display = $i + 1;
               $keep = $weight;
             }
        }
    }

    // 人参が見つからなかった場合は、"not found"と出力
    if($display === 0){
        echo "not found" . "\n";
    }else{
        echo $display . "\n";
    }
?>
