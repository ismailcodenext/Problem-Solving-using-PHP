<?php 
/// Write a program to check student grade based on the marks using if-else statement

$marks = 50;

if($marks >= 60){
    echo "First Division";
}
elseif($marks >= 45 && $marks <=59){
    echo "Second Division";
}
elseif($marks >= 33 && $marks <=44){
    echo "Thired Division";
}
elseif($marks < 33){
    echo "Fail";
}

?>