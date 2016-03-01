<!DOCTYPE html>
<html>
<head>
    <title>Sum of digits</title>
</head>
<body>
    <form action="" method="get">
       Input string: <input type="text" name="str">
        <input type="submit">
    </form>
</body>
</html>

<?php

if(isset($_GET['str'])){

    $number = (explode(',',$_GET['str'])) ;
    ?>
    <br>
    <table border="1">
        <?php for($i=0 ; $i<sizeof($number) ; $i++){ ?>
        <tr>
            <td><?php echo $number[$i] ; ?></td>
            <td>
                <?php
                if(is_numeric($number[$i])){
                    $sum = 0 ;
                    while($number[$i]>0){
                        $value = $number[$i]%10 ;
                        $sum = $sum+$value ;
                        $number[$i] = $number[$i]/10 ;
                    }
                    echo $sum ;
                }
                else{
                    echo "I cannot sum that!" ;
                }
                ?>
            </td>
        </tr>
    <?php } ?>
    </table>
<?php } ?>
