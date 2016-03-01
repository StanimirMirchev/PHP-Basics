<!DOCTYPE html>
<html>
<head>
    <title>String modifier</title>
</head>
<body>
    <form action="" method="GET">
    <input type="text" name="text">
    <input type="radio" value="palindrome" name="checkPalindrome" />
    <label>Check palindrome</label>
    <input type="radio" value="reverse" name="checkReverse" />
    <label for="reverseString">Reverse String</label>
    <input type="radio" value="split" name="checkSplit" />
    <label for="split">Split</label>
    <input type="radio" value="hash" name="hashString">
    <label for="hashString">Hash String</label>
    <input type="radio" value="shuffle" name="shuffleString">
    <label>Shuffle String</label>
    <input type="submit">
    </form>
    <?php
    if(isset($_GET['text'])){
        $input = $_GET['text'] ;
        $word = strrev($input) ;
    
        if($_GET['checkPalindrome'] == 'palindrome'){
            if($input == $word){
                echo $input." is a palindrome! " ;
            }
            else
            {
                echo $input." is not a palindrome! " ;
            }
        }
        else if($_GET['checkReverse'] == 'reverse'){
            echo $word ;
        }

        else if($_GET['checkSplit'] == 'split') {
            $array = str_split($input);
            $array = array_filter($array, function($val) {
                if($val == ' ') {
                    return false;
                }
                return true;
            });
            $result = implode($array, ' ');
            echo $result ;
        }
        else if($_GET['hashString'] == 'hash') {
            $result = crypt($input);
            echo $result ;
        }
        else if($_GET['shuffleString'] == 'shuffle') {
            $result = str_shuffle($input);
            echo $result ;
        }

    }
    ?>
</body>
</html>