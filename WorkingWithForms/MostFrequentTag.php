<!DOCTYPE HTML>
<html>
<head></head>
<body>
<p>Enter Tags:</p>
<form action="MostFrequentTag.php" method="get">
    <input type="text" name="tags"/>
    <input type="submit" value="Submit"/>
</form>
<?php
error_reporting(0);

if(isset($_GET['tags']))
{
    $myExample = explode(",",$_GET['tags']);
    $wordsCount = array();
    for($i = 0 ; $i < sizeof($myExample) ; $i++)
    {
        $wordsCount[$myExample[$i]]++;
    }
    $finalValue = 0;
    $finalIndex = 0;
    foreach($wordsCount as $key => $value)
    {
        echo $key." -> ".$value." times"."<br>";
        if($finalValue < $value)
        {
            $finalValue = $value;
            $finalIndex = $key;
        }
    }
    echo "Max frequency: ".$finalIndex." ---> ".$finalValue ." times";
}
?>
</body>
</html>

<?php
?>