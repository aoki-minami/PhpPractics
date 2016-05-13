<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // パラメータ個数, ユーザーの人数, トップをnに代入
    $tmp = trim(fgets(STDIN));
    $n = explode(" ", $tmp);

    // パラメータの各係数
    $tmp = trim(fgets(STDIN));
    $ci = explode(" ", $tmp);

    // 人数分の合計値の格納
    $sum = array();

    // ユーザの人数分の配列を準備
    for($i=0 ; $i < $n[1] ; $i++){
        $sum[$i] = 0;
    }

    // スコアの計算
    for($i=0 ; $i < $n[1] ; $i++){
        // 各ユーザの持ち点
        $tmp = trim(fgets(STDIN));
        $xi  = explode(" ", $tmp);

        for($j=0 ; $j < $n[0] ; $j++){
            $sum[$i] += $xi[$j] * $ci[$j] . " ";
        }
        // 小数点の切り上げ
        $sum[$i] = round($sum[$i]);
    }

    // 降順ソート
    rsort($sum);

    // 上位スコアの$n[2]番目まで表示
    for($i=0 ; $i < $n[2] ; $i++){
        echo $sum[$i] . "\n";
    }
?>
