<?php
include 'functions.php';

back_home();

$mat = "matemaatika";
$kem = "keemia";
$fys = "füüsika";

$grades = array("Peeter"=>array($mat=>5, $kem=>3, $fys=>3),
                "Ants"=>array($mat=>5, $kem=>5, $fys=>5), 
                "Mari"=>array($mat=>4, $kem=>4, $fys=>2)
               );

echo "Peetri hinne aines ".$mat." on ".$grades['Peeter'][$mat];
echo "<br>";
$grades_id = array_keys($grades);
//print_r($grades_id);

for($i = 0; $i < count($grades_id); $i++){
    echo $grades_id[$i]."<br>";
    foreach($grades[$grades_id[$i]] as $aine => $grade){
        echo $aine." : ".$grade."<br>";
    }
}

?>