<?php

use PHPUnit\Framework\TestCase;
use Testando\Calculadora;

class CalcTest extends TestCase {
    public function testSoma() {
        $Calculadora = new Calculadora();
        $resultado = $Calculadora->soma(5, 3);
        $this->assertEquals(8, $resultado);
    }

    public function testSubtracao() {
        $Calculadora = new Calculadora();
        $resultado = $Calculadora->subtracao(10, 4);
        $this->assertEquals(6, $resultado);
    }

    public function testMultiplicacao() {
        $Calculadora = new Calculadora();
        $resultado = $Calculadora->multiplicacao(6, 2);
        $this->assertEquals(12, $resultado);
    }

    public function testDivisao() {
        $Calculadora = new Calculadora();
        $resultado = $Calculadora->divisao(10, 2);
        $this->assertEquals(5, $resultado);
    }

    public function testDivisaoPorZero() {
        $Calculadora = new Calculadora();
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Divisão por zero não é permitida.");
        $Calculadora->divisao(10, 0);
    }
}
