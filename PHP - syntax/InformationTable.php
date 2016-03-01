<?php
<?php
$name = "Gosho" ;
$phone = "0882-321-423" ;
$age = 24 ;
$adress = "Hadji Dimitar" ;
?>

<!DOCTYPE html>
<html>
<head><title>Information table</title>
</head>
<body>
<table border="1">

    <tr>
        <td style="background: orange">Name</td>
        <td><?php echo $name ?></td>
    </tr>
    <tr>
        <td style="background: orange">Phone number</td>
        <td><?php echo $phone ?></td>
    </tr>
    <tr>
        <td style="background: orange">Age</td>
        <td><?php echo $age ?></td>
    </tr>
    <tr>
        <td style="background: orange">Adress</td>
        <td><?php echo $adress ?></td>
    </tr>
</table>
</body>
</html>