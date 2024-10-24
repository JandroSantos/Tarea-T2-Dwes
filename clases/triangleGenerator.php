<?php
 
class TriangleGenerator{
 
    private $result="";
 
public function generate_triangle(int $altura): String{
 
    $this->result .= "<pre>";
 
if (!($altura % 2)) {
    $altura++;
}
 
for ($i=0; $i<$altura; $i++){
    if (!($i % 2)) {
 
        for ($j=0; $j<($altura-$i)/2; $j++){
            $this->result .= "&nbsp;";
        }
            for ($k=0; $k<=$i; $k++){
            $this->result .= "*";
        }
        $this->result .= "<br>";
    }
}
$this->result .= "</pre>";
return $this->result;
}
}