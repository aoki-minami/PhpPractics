<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 1度に運べる紙の最大枚数
    $MAX = trim( fgets(STDIN) );

    // ファックスが届く回数
    $fax_no = trim( fgets(STDIN) );

    // 一つ前の時間を見る変数
    $before = 0;

    // 合計枚数を格納する変数
    $sum = 0;

    // 画面に表示する変数
    $display = 0;

    // ファックスが届く回数分繰り返す
    for($i=0 ; $i < $fax_no ; $i++){

        // x 時 y 分に c 枚のファックスが届く
        $tmp = trim( fgets(STDIN) );
        $fax = explode(" ", $tmp);

        if($before !== $fax[0] && $i > 0){

            // 運ぶ必要回数を計算
            $need = floor($sum / $MAX);
            if($sum % $MAX !== 0){
                $need++;
            }

            // 必要回数を格納
            $display += $need;

            // 合計値を初期化
            $sum = 0;
        }

        // x 時間の合計枚数を格納
        $sum += $fax[2];

        // 今の時間を記憶させておく
        $before = $fax[0];

    }

    // 運ぶ必要回数を計算
    $need = floor($sum / $MAX);
    if($sum % $MAX !== 0){
            $need++;
    }

    // 必要回数を格納
    $display += $need;

    // 必要回数を画面に表示
    echo $display . "\n";
?>
