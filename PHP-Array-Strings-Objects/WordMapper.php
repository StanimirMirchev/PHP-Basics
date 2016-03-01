<!DOCTYPE html>
<html>
<head>
    <title>Word Mapper</title>
    <style>
        th,td{
            border: 1px solid black;
        }
        table{

            border-collapse: collapse;
            background: darkgrey;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <textarea rows="3" cols="30" name="input">

        </textarea><br>
        <input type="submit" value="Cound word">
    </form>

    <?php
    error_reporting(0);
   $myExample = preg_split('/\W+/',strtolower($_GET['input']),-1,PREG_SPLIT_NO_EMPTY);
    $wordsCount = array();
    if(isset($_GET['input'])){
        for($i = 0 ; $i < sizeof($myExample) ; $i++)
        {
            $wordsCount[$myExample[$i]]++;
        }
        $finalValue = 0;
        $finalIndex = 0;
    ?>
    <br>
     <table border="1">
     <tr>
     <?php
     foreach($wordsCount as $key => $value)
        {
         echo '<td>'.$key.'</td><td>'.$value.'</td>'   ;

            if($finalValue < $value)
            {
                $finalValue = $value;
                $finalIndex = $key;
            }
      ?>
     </tr>
     <?php }
    }
    ?>
</table>
</body>
</html>