<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 当選番号
    $input_lines = trim( fgets(STDIN) );
    $ele_no = explode(" ", $input_lines);

    // くじの枚数
    $lot = trim( fgets(STDIN) );

    // くじの枚数分繰り返す
    for($i=0 ; $i < $lot ; $i++){

        // n枚目のくじの番号
        $input_lines = trim( fgets(STDIN) );
        $lot_no = explode(" ", $input_lines);

        // カウントの初期化
        $count = 0;

        // 当選番号と一致したかどうか
        foreach($ele_no as $ele_value){
            foreach($lot_no as $lot_value){

                // 一致した場合、カウントを1増やす
                if( strcmp($ele_value, $lot_value) === 0){
                    $count++;
                }
            }
        }
         echo $count . "\n";
    }
?>
