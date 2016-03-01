<!DOCTYPE html>
<html>
<head>
    <title>Car Randomizer</title>
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
    <form action="" method="post">
        Enter car:<input type="text"  name=" cars">
        <input type="submit" name="submit" value="Show result" />
    </form>

    <?php
    if(isset($_POST['cars']) && !empty($_POST['cars'])){
        $carsList = $_POST['cars'] ;
        $cars = explode(',' , $carsList) ;

    ?>
        <br>
    <table>
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </tr>

        <?php
            $colors = ["red","green","blue","yellow","black","orange","silver"] ;
            foreach($cars as $carsName){
                $count = rand(1,5) ;
                $randColor = array_rand($colors) ;
        ?>
                <tr>
                    <td> <?php echo $carsName ?></td>
                    <td><?php echo $colors[$randColor] ?></td>
                    <td><?php echo $count ?> </td>
                </tr>
          <?php  } ?>

    </table>
<?php } ?>
</body>
</html>