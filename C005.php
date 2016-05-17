<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 入力されるIPアドレスの数
    $ip_no = trim( fgets(STDIN) );

    // 入力されるIPアドレスの数分繰り返す
    for($i=0 ; $i < $ip_no ; $i++){

        // 初期化
        $bool = "False";

        // 入力されるIPアドレスを格納
        $ip = trim( fgets(STDIN) );

        // 入力されたIPアドレスの長さが 15 以下なら "True"
        // "." の出現回数が3回の場合 "True"
        if(substr_count($ip, ".") === 3 && strlen($ip) <= 15){
            $bool = "True";
        }

        // "True"の時のみ以下の処理を行う
        if($bool === "True"){

            // IPアドレスの数値を配列に格納
            $ip_array = explode(".", $ip);

            // 0 以上 255 以下なら "True", そうでなければ "False" と出力
            foreach($ip_array as $ip_value){
                if( 0 <= $ip_value && $ip_value <= 255){
                    $bool = "True";
                }else{
                    $bool = "False";
                    break;
                }
            }
        }
        // 結果を画面に表示
        echo $bool . "\n";
    }
?>
