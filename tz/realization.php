<?php


class realization
{
    function realize(){
        if(isset($_POST['a'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
        }

        if(isset($a)){
            $D = ($b*$b) - (4*$a*$c);
            echo "D = $D<br>";
            if($D < 0){
                echo 'Нет вещественных корней<br>';
            }
            if($D == 0){
                echo "x = " . (-$b)/(2*$a) . "<br>";
            }
            if($D > 0){
                echo "x<sub>1</sub> = " . (-$b - sqrt($D))/(2*$a) . "<br>";
                echo "x<sub>2</sub> = " . (-$b + sqrt($D))/(2*$a) . "<br>";
            }
        }
    }
}
