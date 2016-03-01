<!DOCTYPE html>
<html>
<head>
    <title>Text colorer</title>
</head>
<body>
<form action="" method="get">
    <textarea rows="3" cols="30" name="input">

    </textarea><br>
    <input type="submit" value="Cound word">
</form>
<?php
    if(isset($_GET['input'])){
        $string = str_split($_GET['input']) ;
        $string = array_filter($string, function($val) {
            if($val == ' ') {
                return false;
            }
            return true;
        });
        $result = implode($string, ' ');
        $len = strlen($result) ;
        for($i=0 ; $i<$len ; $i++){
            if(ord($result[$i]) % 2 == 0){
                echo '<font color="red">'.$result[$i].'</font>';
            }
            else{
                echo '<font color="blue">'.$result[$i].'</font>' ;
            }
        }
    }
?>
</body>
</html>