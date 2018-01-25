<?php

//array (workdays)
$myarr=Array('Esmaspäev', 
             'Teisipäev', 
             'Kolmapäev', 
             'Neljapäev', 
             'Reede');
$day = "Laupäev";

//echo strtoupper($day)."<br>";

//$var = 10; 
//var_dump($var); 

//var_dump($myarr);

for($i = 0; $i < count($myarr); $i++){
    if (strtoupper($myarr[$i]) == strtoupper($day)){
    //if ($myarr[$i] == $day) {
    echo $myarr[$i]." is a workday<br>";
    }elseif ($day == 'Laupäev' || $day == 'Pühapäev') {
        echo "$day is weekend";
        die;
    } 
}



//while

?>