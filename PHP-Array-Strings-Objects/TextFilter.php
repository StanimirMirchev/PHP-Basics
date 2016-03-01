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
        Banned word:<br>
        <textarea rows="3" cols="30" name="words">
        </textarea><br>
        <input type="submit">
    </form>
    <?php
    if(isset($_GET["text"])){
        $text=$_GET['text'];
        $words=preg_split('/\W+/',$_GET['words'],-1,PREG_SPLIT_NO_EMPTY);

        foreach ($words as $value) {
            $text = str_replace($value, str_repeat('*', strlen($value)), $text);
        }
        echo '<p>'.$text.'</p>';

    }
    ?>
</body>
</html>