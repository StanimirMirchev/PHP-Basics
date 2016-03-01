<!DOCTYPE html>
<html>
<head>
    <title>Primes In Range</title>
</head>
<body>
    <form action="" method="post">
        Starting index: <input type="text" name="start">
        End: <input type="text" name="end">
        <input type="submit">
    </form>

    <?php
    if(isset ($_POST['start']) && isset($_POST['end']) ){
        $start = $_POST['start'] ;
        $end = $_POST['end'] ;
        $divider = 2 ;
       function primeCheck($value){
            $maxDivider = sqrt($value) ;
            $isPrime = true ;
            $divider = 2 ;
             while($isPrime && ($divider <= $maxDivider)){
               if($value%$divider === 0){
                   $isPrime= false ;
                  }
                  $divider++ ;
            }
            if($isPrime){
                return true ;
            }
            else{
                return false ;
            }
        }
        for($i=$start ; $i<=$end ; $i++){

            if(primeCheck($i)){
               echo '<b><font color="red">'.$i.'</font></b>'.', ';
            }
            else
            {
                echo $i.', ' ;
            }
        }
    }
    ?>
</body>
</html>