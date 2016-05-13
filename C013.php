<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 嫌いな数字
    $bad_no = trim(fgets(STDIN));

    // 病室の配列
    $room = array();

    // 病室の総数
        $room_total = trim(fgets(STDIN));
    //
    for($i=0 ; $i < $room_total ; $i++){

        // n個目の部屋番号
        $room_no = trim(fgets(STDIN));


        // 部屋番号に嫌いな数字が含まれているかチェック
        if(strpos($room_no, $bad_no) === false){
            // 含まれてなければ部屋番号を表示
            $room[$i] = $room_no;
        }
    }

    // 希望する部屋が1つもない場合
    if( empty($room) ){
        echo "none" . "\n";

    // 希望する部屋がある場合
    }else{
        foreach($room as $room_value){
            echo $room_value . "\n";
        }
    }
?>
