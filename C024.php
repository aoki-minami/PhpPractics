<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 命令する個数を格納
    $order_no = fgets(STDIN);

    // 変数1, 変数2 を初期化
    $var = array(0, 0);

    // 命令する個数分繰り返す
    for($i=0 ; $i < $order_no ; $i++){

        // 命令する種類を格納
        $tmp = trim( fgets(STDIN) );
        $order_type = explode(" ", $tmp);

        // 命令する種類の判別

        // SETの場合
        if($order_type[0] === "SET"){

            // 変数1 に値を代入
            if($order_type[1] === "1"){
                $var[0] = $order_type[2];

            // 変数2 に値を代入
            }else{
                $var[1] = $order_type[2];
            }

        // ADDの場合
        }elseif( $order_type[0] === "ADD" ){

            //変数 1 の値 + aを計算し、計算結果を変数 2 に代入する
            $var[1]  = $var[0] + $order_type[1];

        // SUBの場合
        }else{

            // 変数 1 の値 - aを計算し、計算結果を変数 2 に代入する
            $var[1]  = $var[0] - $order_type[1];
        }
    }
    //変数1, 変数2 を表示
    echo $var[0] . " " . $var[1] . "\n";
?>
