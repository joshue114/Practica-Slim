<?php

class ChangeString {

    function build($entrada){
        $ascii = NULL;
        $salida = "";
 
        for ($i = 0; $i < strlen($entrada); $i++) 
        { 
            $ascii = ord($entrada[$i]);
            if($ascii>=97 && $ascii<122 || $ascii>=65 && $ascii<90){
                $salida .= chr($ascii + 1);
            }else{
                if($ascii == 90 || $ascii == 122)
                    $salida .= chr($ascii - 25);
                else
                    $salida .= chr($ascii);
            }
        }
        return($salida);
    }
   // echo build("123 abcd*2");
}


class CompleteRange{
    
    function build2($entrada){
       $salida = "";
       $salida = $entrada[2];
       for ($i = 0; $i < count($entrada); $i++) 
        { 
            $ascii = ord($entrada[$i]);
            if($ascii > 47 || $ascii < 58)
                $salida .= chr($ascii + 1);
        }
        return($entrada);
    }

   /* echo "\n";
    echo build2("1,2,3,5");*/

}


class ClearPar{
    
    function build3($entrada){
        $salida = "";
        for($i = 0; $i < strlen($entrada); $i++){
            if($entrada[$i] == "(" && $entrada[$i+1] == ")"){
                $salida .= $entrada[$i];
                $salida .= $entrada[$i+1];
            }
        }
        return($salida);
    }
    //echo build3(")()()(((");
}

?>