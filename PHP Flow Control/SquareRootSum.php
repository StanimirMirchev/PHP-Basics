<!DOCTYPE html>
<html>
<head>
        <title>Square Root Sum</title>
        <style>
            th,td{
                border: 1px solid black;
            }
            table{

                border-collapse: collapse;
            }
        </style>
</head>
<body>
    <table>
        <tr>
            <th>Number</th>
            <th>Square</th>
        </tr>
        <?php
        $sum = 0 ;
        for($i =0 ; $i<=100 ; $i+=2){
                $sqrt = sqrt($i) ;
                $sum = $sum + $sqrt ;
                $sqrtRoundet = round($sqrt,2) ;
        ?>
        <tr>
            <td>
                <?php
                    echo $i ;
                ?>
            </td>
            <td>
                <?php echo $sqrtRoundet ?>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td>Total:</td>
            <td><?php echo round($sum,2) ?></td>
        </tr>
    </table>
</body>
</html>