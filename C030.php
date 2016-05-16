<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // size に High, Wide を格納
    $tmp = trim( fgets(STDIN) );
    $size = explode(" ", $tmp);

    // 繰り返し
    for($i = 0; $i < $size[0] ; $i++){

        // 画素値を格納
        $tmp = trim( fgets(STDIN) );
        $gray = explode(" ", $tmp);

        for($j=0 ; $j < $size[1] ; $j++){
           // echo $gray[$j];

            // 127以下なら0, 128以上なら1を表示
            if($gray[$j] <= "127"){
                echo "0";
            }else{
                echo "1";
            }

            // 繰り返しが続く場合半角スペース
            if($j< $size[1] - 1){
                echo " ";
            }else{
                echo "\n";
            }
        }
    }
?>
