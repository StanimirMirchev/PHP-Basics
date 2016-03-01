<!DOCTYPE html>
<html>
<head>
    <title>Text filter</title>
</head>
<body>
<form action="" method="get">
    Enter text: <br>
    <textarea rows="3" cols="30" name="text">
    </textarea><br>
    Word:<br>
    <input type="text" name="word">
    <br>
    <input type="submit">
</form>
<?php
if(isset($_GET['text'])){
    $text = $_GET['text'];
    $word = $_GET['word'];
    $arrSentences = preg_split('/(?<=[.!?]|[.!?][\'"])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    for ($i = 0; $i < count($arrSentences); $i++) {
        $temp = explode(' ', $arrSentences[$i]);
        if(in_array($word, $temp) && preg_match('/(\s+)' . $word . '\1(.*)[.?!]/', $arrSentences[$i])){
            echo($arrSentences[$i] . '<br>');
        }
    }
}



?>
</body>
</html>