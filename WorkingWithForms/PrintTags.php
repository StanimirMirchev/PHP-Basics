<!DOCTYPE HTML>
<html>
<head></head>
<body>
<p>Enter Tags:</p>
<form action="PrintTags.php" method="get">
    <input type="text" name="tags"/>
    <input type="submit" value="Submit"/>
</form>
<?php
    if(isset($_GET['tags']))
    {
        $arrayTags = explode(",", $_GET['tags']);
        foreach($arrayTags as $key => $value )
        {
            echo $key.' : '.$value."<br>";
        }
    }
?>
</body>
</html>



<?php
?>