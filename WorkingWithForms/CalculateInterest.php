<!DOCTYPE html>
<html>
<head>
    <title>Calculate Interest </title>
</head>
<body>
<form action="" method="get">
    <label for="amount">Enter Amount</label>
    <input type="text" name="money">
    <br>
    <input type="radio" name="USD">
    <label for="USD">USD</label>

    <input type="radio" name="EUR">
    <label for="EUR">EUR</label>

    <input type="radio" name="BGD">
    <label for="BGD">BGD</label>
    <br>
    <label for="interest">Compound interest amount</label>
    <input type="text" name="interest">
    <br>
    <select name="period">
        <option value="6Months">6 Months</option>
        <option value="1Year">1 Year</option>
        <option value="2Years">2 Years</option>
        <option value="3Years">3 Years</option>
    </select>
    <input type="submit" name="calc" value="Calculate">
</form>
</body>
</html>
<?php
if(isset($_GET['money'])){
    $money=$_GET['money'] ;
    $interest=$_GET['interest'] ;
    $monthInterestInterest=($interest/12)+100 ;

    if($_GET['period'] === '6Months'){
        for($i=0 ; $i<6 ; $i++){
            $money = $money*($monthInterest/100) ;
        }
        echo round($money,2) ;
    }
    else if($_GET['period'] === '1Year'){
        for($i=0 ; $i<12 ; $i++){
            $money = $money*($monthInterest/100) ;
        }
        echo round($money,2) ;
    }
    else  if($_GET['period'] === '2Years'){
        for($i=0 ; $i<24 ; $i++){
            $money = $money*($monthInterest/100) ;
        }
        echo round($money,2) ;
    }
    else if($_GET['period'] === '1Year'){
        for($i=0 ; $i<36 ; $i++){
            $money = $money*($monthInterest/100) ;
        }
        echo round($money,2) ;
    }

}
?>