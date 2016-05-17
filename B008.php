<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 会員数、ライブイベントの数を格納
    $tmp = explode(" ", trim( fgets(STDIN) ) );
    $mem_no  = $tmp[0];
    $live_no = $tmp[1];

    // 結果を表示する変数
    $display = 0;

    // ライブイベントの数分繰り返す
    for($i=0 ; $i < $live_no ; $i++){

        // 合計を初期化
        $sum = 0;

        // 損益の値を格納
        $money = explode(" ", trim( fgets(STDIN) ) );

        // 会員数分繰り返す
        for($j=0 ; $j < $mem_no ; $j++){

            // 損益の合計
            $sum += $money[$j];
        }

        // 0 以上なら表示結果に加算する
        if($sum > 0){
            $display += $sum;
        }
    }

    // 結果を表示
    echo $display . "\n";
?>
