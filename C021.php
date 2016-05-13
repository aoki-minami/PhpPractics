<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 台風の中心座標の値
    $input_lines = trim( fgets(STDIN) );
    $tmp = explode(" ", $input_lines);
    $stoom_x = $tmp[0];
    $stoom_y = $tmp[1];

    // 台風の目の半径の値
    $stoom_eye = $tmp[2];
    $stoom_eye = pow($stoom_eye, 2);

    // 台風の暴風域の値
    $stoom_area = $tmp[3];
    $stoom_area = pow($stoom_area, 2);

    // 人の数
    $human = trim( fgets(STDIN) );

    // 人数分繰り返す
    for($i=0 ; $i < $human ; $i++){

        // n人目の人の座標
        $input_lines = trim( fgets(STDIN) );
        $tmp = explode(" ", $input_lines);
        $human_x = $tmp[0];
        $human_y = $tmp[1];

        //
        $x = pow( ($human_x - $stoom_x), 2 );
        $y = pow( ($human_y - $stoom_y), 2 );

        // 暴風域にいるかどうか判定、暴風域にいれば "yes"、そうでなければ "no"と出力
        if($stoom_eye <= $x + $y && $x + $y <= $stoom_area){
            echo "yes" . "\n";
        }else{
            echo "no" . "\n";
        }
    }
?>
