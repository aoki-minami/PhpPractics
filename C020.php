<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input_lines = fgets(STDIN);
    $tmp = explode(" ", $input_lines);

    // 仕入れの量を格納
    $amo = $tmp[0];

    // 仕入れから売れた量のパーセント
    $per = $tmp[1];

    // 売れ残った量
    $amo = $amo - ($amo * ($per * 0.01) );

    // 売れ残った量のうちの売れた量のパーセント
    $per = $tmp[2];

    // 最後まで残った量
    $amo = $amo - ($amo * ($per * 0.01) );

    // 最後まで残った量を表示
    echo $amo. "\n";
?>
