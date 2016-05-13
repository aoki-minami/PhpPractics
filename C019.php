<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 判定したい整数の個数
    $int_no = trim( fgets(STDIN) );

    // 約数の合計値
    $sum = 0;

    // 判定したい整数の個数分繰り返す
    for($i=0 ; $i < $int_no ; $i++){

        // 判定する整数を格納
        $int = trim( fgets(STDIN) );

        // 約数のうち、自身を除いたものの和
        for($j=1 ; $j < $int - 1 ; $j++){
            if($int % $j === 0){
                $sum += $j;
            }
        }

        // 約数 = 約数の総和 の場合、"perfect"と表示
        if($int == $sum){
            echo "perfect" . "\n";

        // |約数 - 約数の総和| = 1 の場合、"nearly"と表示
        }elseif(abs($int - $sum) === 1){
            echo "nearly" . "\n";

        // どちらでもなければ "neither"と表示
        }else{
            echo "neither" . "\n";
        }

        // 合計値の初期化
        $sum = 0;
    }


?>
