<?php
 
class TriangleGenerator{
 
 
public function generate_triangle(int $altura): String{
 
    echo "<pre>";
 
if (!($altura % 2)) {
    $altura++;
}
 
for ($i=0; $i<$altura; $i++){
    if (!($i % 2)) {
 
        for ($j=0; $j<($altura-$i)/2; $j++){
            echo "&nbsp;";
        }
            for ($k=0; $k<=$i; $k++){
            echo "*";
        }
            echo "<br>";
    }
}
echo "</pre>";
return "";
}
}