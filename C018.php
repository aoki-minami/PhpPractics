<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 最小値を求めるために使用する配列
    $min = array();

    // レシピに書かれている食材の数を格納
    $recipe_no = trim( fgets(STDIN) );

    // レシピに書かれている食材の数分繰り返す
    for($i=0 ; $i < $recipe_no ; $i++){

        $min[$i] = 0;

        // 文字と数字を分ける
        $tmp = explode(" ", trim( fgets(STDIN) ) );

        // 配列に文字と数字を格納
        $recipe_cha[$i] = $tmp[0];
        $recipe_num[$i] = $tmp[1];


    }

    // あなたが所持している食材の数を格納
    $poss_no = trim( fgets(STDIN) );

    // 所持している食材の数分繰り返す
    for($i=0 ; $i < $poss_no ; $i++){

        // 文字と数字を分ける
        $tmp = explode(" ", trim( fgets(STDIN) ) );

        // 配列に文字と数字を格納
        $poss_cha[$i] = $tmp[0];
        $poss_num[$i] = $tmp[1];

    }

    //　
    for($i=0 ; $i < $recipe_no ; $i++){
        for($j=0 ; $j < $poss_no ; $j++){

           // 文字が一致したかどうかチェック
            if($recipe_cha[$i] === $poss_cha[$j]){
                $min[$i] = floor( $poss_num[$j] / $recipe_num[$i] );
            }
        }
    }

    // 結果を表示
    echo min($min);

?>
