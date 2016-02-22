<?php

class CalculadoraService {

    public function doSomethingWithTheNumbers($firstvalue, $secondvalue, $operation) {
         // Si $primerValor y $secondvalue estan definidos
        if (isset($firstvalue, $secondvalue)) {
            if($operation =='plus'){
                return $firstvalue+$secondvalue;
            }  else if ($operation == 'minus'){
                return $firstvalue - $secondvalue;
            } else if ($operation == 'multi'){
                return $firstvalue * $secondvalue;
            } else if($operation == 'divi'){
                return $firstvalue / $secondvalue;
            }

        }

        return null;
    } 
   
}