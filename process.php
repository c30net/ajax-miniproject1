<?php
if($_POST['text'] && $_POST['op']) {

    $text = $_POST['text'];
    $op = $_POST['op'];

    switch ($op) {
        case "print":
            echo "<p>$text</p>";
            break;
        case "bold":
            echo "<b>$text</b>";
            break;
        case "italic":
            echo "<i>$text</i>";
            break;
        case "lowercase":
            echo strtolower($text);
            break;
        case "uppercase":
            echo strtoupper($text);
            break;
        case "capital":
            $words = explode(" ",$text);
            $result = '';
            foreach ($words as $word){
                $result .= ucfirst($word)." ";
            }
            $result;
            echo $result;
            break;
        case "countWords":
            echo count(explode(" ",$text));
            break;
        case "splitWords":
            $words = explode(" ",$text);
            $r = '';
            foreach ($words as $word){
                $r .= " (".$word.") ";
            }
            $r;
            echo $r;
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
}
