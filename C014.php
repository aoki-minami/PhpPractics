<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 箱の数、ボールの直径を格納
    $input_lines = trim( fgets(STDIN) );
    $tmp = explode(" ", $input_lines);
    $box_no = $tmp[0];
    $bool_d = $tmp[1] * 2;

    // 箱の数分繰り返す
    for($i=0 ; $i < $box_no ; $i++){

        //
        $input_lines = trim( fgets(STDIN) );
        $box = explode(" ", $input_lines);

        if($box[0] >= $bool_d && $box[1] >= $bool_d && $box[2] >= $bool_d){
            echo $i + 1 . "\n";
        }
    }
?>
