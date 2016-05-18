<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 配列 $con_pos に工事現場の x 座標, 工事現場の y 座標, 工事現場の騒音の大きさを格納
    $input_lines = trim(fgets(STDIN));
    $con_pos = explode(" ", $input_lines);

    // 木陰の数を格納
    $sha_no = trim(fgets(STDIN));

    // 木陰の数分繰り返す
    for($i=0 ; $i < $sha_no ; $i++){

        // 配列 $sha_pos に木陰のx座標,木陰のy座標を格納
        $input_lines = trim(fgets(STDIN));
        $sha_pos = explode(" ", $input_lines);

        // 騒音x を求める
        $noisy_x = pow( ($con_pos[0] - $sha_pos[0]), 2 );

        // 騒音y を求める
        $noisy_y = pow( ($con_pos[1] - $sha_pos[1]), 2);

        // 騒音距離 を求める
        $noisy_m = pow($con_pos[2], 2);

        // 騒音判定　静かなら "silent", そうでなければ "noisy" と画面に出力
        if( ($noisy_x + $noisy_y) >= $noisy_m ){
            echo "silent" . "\n";
        }else{
            echo "noisy" . "\n";
        }
    }
?>
