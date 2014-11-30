<?php

header("Content-Type: text/html; charset=utf8");
drawCalendar(2014);

function drawCalendar($year){
    $months = ['Януари','Февруари','Март','Април','Май','Юни','Юли','Август','Септември','Октомври','Ноември','Декември'];
    $weekDays = ['По','Вт','Ср','Чт','Пе','Сб','Не'];
    $currentMonth = 0;
    $tempDays = 1;
    $startDate = date('N', strtotime( $year.'-01-01'));
    echo "<table colspacing='0'>";
    echo "<thead><tr><td colspan='4' style='border-bottom: 1px solid black; text-align: center;'><h1>$year</h1></td></tr></thead>";
    for($monthRows = 1; $monthRows <=3; $monthRows++){
        echo "<tr>";
        for($monthCols = 1; $monthCols <=4; $monthCols++){
            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth+1, $year);
            echo "<td>";
            echo "<table><thead><tr><td colspan='7' style='text-align: center; border-bottom: 1px solid black;'>$months[$currentMonth]</td></tr></thead><tr>";
            foreach($weekDays as $dayNames){
                if($dayNames != 'Не'){
                    echo "<td style='text-align: center; border-bottom: 1px solid black;'>$dayNames</td>";
                }
                else{
                    echo "<td style='text-align: center; border-bottom: 1px solid black; color: red;'>$dayNames</td>";
                }
            }
            echo "</tr>";
            for($weekOfMonth = 1; $weekOfMonth <= 6; $weekOfMonth++){
                echo "<tr>";
                for($dayOfWeek = 1; $dayOfWeek < 8; $dayOfWeek++){
                    if($dayOfWeek == $startDate && $tempDays <= $daysInMonth){
                        if($dayOfWeek == 7){
                            echo "<td style='text-align: center; height: 21px;'>$tempDays</td>";
                            $startDate = 1;
                        }
                        else{
                            echo "<td style='text-align: center; height: 21px;'>$tempDays</td>";
                            $startDate++;
                        }
                        $tempDays++;
                    }
                    else{
                        echo "<td style='text-align: center; height: 21px;'> </td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table></td>";
            $currentMonth++;
            $tempDays = 1;
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>