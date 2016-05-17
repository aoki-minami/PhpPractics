<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 連休の日数、旅行の日数を格納
    $input_lines = fgets(STDIN);
    $tmp = explode(" ", $input_lines);
    $HOLIDAY = $tmp[0];
    $TRAVEL  = $tmp[1];

    // 降水確率の平均を格納
    $ave = array();

    // 降水確率の平均の最初の日
    $start = array();

    // 降水確率の平均の最後の日
    $end = array();

    // 日付と降水確率を格納
    for($i=0 ; $i < $HOLIDAY ; $i++){
        $input_lines = trim( fgets(STDIN) );
        $tmp = explode(" ", $input_lines);
        $day[] = $tmp[0];
        $pop[] = $tmp[1];
    }

    // $HOLIDAY - $TRAVEL分　$aveを初期化
    for($i=0 ; $i <= $HOLIDAY - $TRAVEL ; $i++){
        $ave[$i] = 0;
    }


    // $HOLIDAY - $TRAVEL分繰り返す
    for($i=0 ; $i <= $HOLIDAY - $TRAVEL ; $i++){
        for($j=0 ; $j < $TRAVEL ; $j++){

            // $TRAVEL分の降水確率格納
            $ave[$i] += $pop[$i+$j];
        }

        //　降水確率の平均を格納
        $ave[$i] = $ave[$i] / $TRAVEL;

        // 降水確率の平均の最初の日と最後の日を格納
        $start[$i] = $day[$i];
        $end[$i]   = $day[$i+$TRAVEL-1];
    }

    // 最小値を格納
    $min = min($ave);

    foreach($ave as $key => $ave_value){
        //　初めの最小値を見つける
        if($min === $ave_value){

            // 表示
            echo $start[$key] . " " . $end[$key] . "\n";
            break;
        }
    }
?>
