<?php 
     function generateTriangle(int $altura): string{
        if($altura < 0){
            return "";
        }

        $triangulo = "";

        for($i = 0;$i<$altura;$i++){
            $triangulo .= "<p>";

            for($j = 0;$j<$altura-$i-1;$j++){
                $triangulo .= "&nbsp";
            }
            for($k = 0;$k<$altura*2-1;$k++){
                $triangulo .= "*";
            }
            $triangulo .= "</p>";
        }
        return $triangulo;
    }
?>