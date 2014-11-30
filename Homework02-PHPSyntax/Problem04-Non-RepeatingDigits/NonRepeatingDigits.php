<?php

    findNonRepeatingDigits(1234);
    findNonRepeatingDigits(145);
    findNonRepeatingDigits(15);
    findNonRepeatingDigits(247);

    function findNonRepeatingDigits($num){
        $nums = [];
        if($num > 999){
            $num = 999;
        }
        if (($num > 99) and ($num < 1000)){
            for($i = 100; $i <= $num; $i++){
                $firstNum = (int)($i/100);
                $secondNum = (int)(($i/10)%10);
                $thirdNum = (int)($i%10);
                if($firstNum != $secondNum && $firstNum != $thirdNum && $thirdNum != $secondNum){
                    array_push($nums, $i);
                }
            }
        }
        if(count($nums) == 0){
            echo 'no';
            echo '<br>';
        }
        else{
            echo implode(', ', $nums);
            echo '<br>';
        }
    };
?>