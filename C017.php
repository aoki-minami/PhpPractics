<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 親カードの値を格納
    $input_lines = trim( fgets(STDIN) );
    $parent = explode(" ", $input_lines);

    // 子の人数を格納
    $child_no = trim( fgets(STDIN) );

    // 子の人数分繰り返す
    for($i=0 ; $i < $child_no ; $i++){

        // 子カードの値を格納
        $input_lines = trim( fgets(STDIN) );
        $child = explode(" ", $input_lines);
        //echo $child[0] . $child[1];

        // 親カードの方が強いならば "High"、そうでなければ "Low" と出力

        // 1番目のカードの判定
        if($parent[0] > $child[0]){
            echo "High" . "\n";

        // 1つ目の番号が同じ場合、2つ目の番号が小さいカードのほうが強い
        }elseif($parent[0] === $child[0] && $parent[1] < $child[1]){
            echo "High" . "\n";

        // それ以外の場合
        }else{
            echo "Low" . "\n";
        }
    }
?>
