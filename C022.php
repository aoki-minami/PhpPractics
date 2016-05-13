<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 日数
    $day = trim( fgets(STDIN) );

    // 日数分繰り返す
    for($i=0 ; $i < $day ; $i++){

        // n日目の株
        $input_lines = trim( fgets(STDIN) );
        $stock = explode(" ", $input_lines);

        // 株の始値
        $stock_srart = $stock[0];

        // 株の1日目の始値を表示
        if($i === 0){
            echo $stock_srart . " ";
        }

        // n日目の高値
        $stock_high[] = $stock[2];

        // n日目の低値
        $stock_low[] = $stock[3];

        // 株の終値
        $stock_end = $stock[1];

        // 株のn日目の終値
        if($i === $day - 1){
            echo $stock_end , " ";
        }
    }

    // 1 日目から n 日目までの最大の高値
    echo max($stock_high) . " ";

    // 1 日目から n 日目までの最小の安値
    echo min($stock_low) . "\n";
?>
