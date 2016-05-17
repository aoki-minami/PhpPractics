<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // バインダーのポケット数、名詞番号
    $tmp = explode(" ", trim( fgets(STDIN) ) );
    $binder = $tmp[0];
    $card_no   = $tmp[1];

    // 最小値を格納
    $min = $binder - ($binder - 1);

    // 最大値
    $max = $binder * 2;

    // 割り算
    $div = floor($card_no / $max);

    // あまり
    $rem = $card_no % $max;

    // あまりが 1 以上かつ　$binder　以下の場合
    if(1 <= $rem && $rem <= $binder){
        // 差を求める
        $diff = $rem - $min;

        // 裏の番号を求める
        $back = $max - $diff;

    // あまりが　$binder　より大きいの場合
    }elseif($rem >= $binder){
        // 差を求める
        $diff = $max - $rem;

        // 裏の番号を求める
        $back = $min + $diff;

    // あまりが 0 の場合
    }else{
        // 裏の番号を求める
        $back = $card_no - ($max - 1);
    }

    // あまりが 0 以外の場合
    if($rem !== 0){
            $back += $max * $div;
    }

    // 結果を表示
    echo $back;
?>
