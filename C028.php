<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 問題数を格納
    $pro_no = trim( fgets(STDIN) );

    // 合計
    $sum = 0;

    // 問題数分繰り返す
    for($i=0 ; $i < $pro_no ; $i++){

        // 失点のカウントの初期化
        $count = 0;

        // 各問題の正解と生徒の解答を格納
        $tmp = trim( fgets(STDIN) );
        $answer = explode(" ", $tmp);

        // 模範解答の長さを取得
        $ans_len = strlen($answer[0]);
        // 生徒の解答の長さを取得
        $stu_len = strlen($answer[1]);

        // 長さを比較
        if($ans_len !== $stu_len){
            $count = 2;
        }

        // 文字列を配列に格納
        $mod = str_split($answer[0]);
        $stu = str_split($answer[1]);

        // 同じ位置にある文字が異なるかチェック
        for($j=0 ; $j < $ans_len ; $j++){
            if($count < 2){
                if( strcmp($mod[$j], $stu[$j]) ){
                    $count++;
                }
            }
        }

        // ポイントを格納
        $sum = $sum + (2 - $count);
    }

    // 合計のポイントを表示
    echo $sum;

?>
