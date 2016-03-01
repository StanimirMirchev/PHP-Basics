<?php
$number = 145 ;
$firstNumber ;
$secondNumber ;
$thirdNumber ;
$isDifferent = true ;
$helpVal ;
if(strlen((string)$number) < 3){
    echo "no" ;
    exit ;
}
else{
    if(strlen((string)$number) > 3){
        $number = 987;
    }
    for( $i = 102 ; $i<=$number ; $i++){
        $helpVal  = $i ;
        $firstNumber = $helpVal%10 ;
        $helpVal = $helpVal/10 ;
        $secondNumber = $helpVal%10 ;
        $helpVal = $helpVal/10 ;
        $thirdNumber = round($helpVal);
        if(($firstNumber == $secondNumber)||($firstNumber==$thirdNumber)||($secondNumber==$thirdNumber)){
            $isDifferent = false ;
        }
        if($isDifferent){
            echo $i." " ;
        }
        $isDifferent= true ;
    }
}

?>