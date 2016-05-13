<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // レシートの枚数
    $receipt_no = trim(fgets(STDIN));

    // ポイントの合計値
    $sum = 0;


    // レシートの枚数分繰り返す
    for($i=0 ; $i < $receipt_no ; $i++){

        // N枚目のレシートの日付, 購入金額
        $n = trim(fgets(STDIN));
        $receipt = explode(" ", $n);

        // 3のつく日の場合
        if( strpos($receipt[0], '3') !== false ){
            $sum = $sum + floor($receipt[1] * 0.03);

        // 5のつく日の場合
        }elseif( strpos($receipt[0], '5') !== false ){
            $sum = $sum + floor($receipt[1] * 0.05);

        // 3, 5のつく日以外の場合
        }else{
            $sum = $sum + floor($receipt[1] * 0.01);
        }
    }

    // 合計金額の表示
    echo $sum;
?>
