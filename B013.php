<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 配座駅へまで時間 a 分,
    // 配座駅から儀野駅の乗車時間 b 分,
    // 儀野駅から会社までの時間 c 分
    $move_abc = explode(" ", trim( fgets(STDIN) ) );
    $move_a = $move_abc[0];
    $move_b = $move_abc[1];
    $move_c = $move_abc[2];

    // 配座駅から出る電車の本数を変数 $train に格納
    $train = trim( fgets(STDIN) );

    // 電車の発車時刻を格納
    // $time_hour に h 時, $time_min に m 分を格納
    for($i=0 ; $i < $train ; $i++){
        $time = explode(" ", trim( fgets(STDIN) ) );
        $time_hour[] = $time[0];
        $time_min[]  = $time[1];
    }

    // 結果を表示する変数 $result を初期化
    $result = 0;

    //　電車の本数分繰り返す
    for($i=0 ; $i < $train ; $i++){
        // 電車の発車時刻を　分　単位で $station に格納
        $station = $time_hour[$i] * 60 + $time_min[$i];
        // $station の値を $minute に格納
        $minute = $station;
        // 配座駅から儀野駅の乗車時間 b 分　と　儀野駅から会社までの時間 c 分を
        // $minute に格納
        $minute += $move_b + $move_c;

        // 8 時 59 分までに出社できるか判定
        if($minute < 540){
            // 配座駅の発射時刻 - 配座駅へまで時間 a 分 を　$reslut に格納
            $result = $station - $move_a;
        }else{
            break;
        }
    }

    // 結果を画面に出力
    echo "0" . floor($result / 60), ":";

    // 1 桁の場合 10 の位を 0 で埋める
    if($result % 60 < 10){
        echo "0";
    }

    echo $result % 60;
?>
