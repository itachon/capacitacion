<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of calculadoraTest
 *
 * @author phauri
 */
use PHPUnit\Framework\TestCase;

require 'Calculadora.php';

class calculadoraTest extends TestCase {

    public function setUp() {
        $this->calc = new Calculadora();
    }

    //put your code here
    /*public function testAssert() {
        $this->assertTrue(true, 'Debe ser verdadero');
    }*/

   
     public function validar_telefono(){
        $this->assertEquals(9, $this->calc->celular_telefono(2,982156453));
        $this->assertEquals(6, $this->calc->celular_telefono(1,986294));
    }

}
