<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calculadora
 *
 * @author phauri
 */
class Calculadora {
    //put your code here
    
    /*public function sumar($x, $y){
        return $x + $y;
    }
     public function restar($x, $y){
        return $x - $y;
    }*/
     public function celular_telefono($validacion, $cadena) {
          fwrite(STDERR, print_r($validacion, TRUE));
        if ($validacion === '1') {
            if (strlen($cadena) > 9) {
                return 1;
            } else {
                return 9;
            }
        }else if($validacion === '2'){
             if (strlen($cadena) > 6) {
                return 1;
            } else {
                return 6;
            }
        }
        
    }
}
