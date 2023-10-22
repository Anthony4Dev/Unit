<?php

//Parte do código onde ficam as funções
class Calculadora {
    //Define a classe Calculadora, que contém métodos para operações matemáticas.

    public function soma($a, $b) {
        //Método para realizar uma soma entre dois números ($a e $b).
        return $a + $b; //Retorna o resultado da soma.
    }

    public function subtracao($a, $b) {
        // Método para realizar uma subtração entre dois números ($a e $b).
        return $a - $b; //Retorna o resultado da subtração.
    }

    public function multiplicacao($a, $b) {
        //Método para realizar uma multiplicação entre dois números ($a e $b).
        return $a * $b; //Retorna o resultado da multiplicação.
    }

    public function divisao($a, $b) {
        //Método para realizar uma divisão entre dois números ($a e $b).
        if ($b == 0) {
            //Verifica se o divisor ($b) é igual a zero.
            throw new \InvalidArgumentException("Divisão por zero não é permitida.");
            //Se $b for igual a zero, lança uma exceção com a mensagem de erro.
        }
        return $a / $b; //Retorna o resultado da divisão.
    }
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

use PHPUnit\Framework\TestCase;

// Classe de testes CalcTest, estendendo a classe TestCase do PHPUnit.

class CalcTest extends TestCase {

    // Função de teste para verificar a soma de dois números.

    public function testSoma() {
        $Calculadora = new Calculadora(); // Instancia a classe Calculadora.
        $resultado = $Calculadora->soma(5, 3); // Realiza a soma e armazena o resultado.

        $this->assertEquals(8, $resultado, "Teste de soma falhou. Resultado: " . $resultado);
        // Usa a asserção assertEquals para verificar se o resultado é igual a 8.
        // Se a asserção falhar, exibe uma mensagem de erro com o valor real.

        if ($resultado === 8) {
            echo "Teste de soma passou com sucesso!\n"; // Mensagem de sucesso se o resultado for 8.
        }
    }

    // Função de teste para verificar a subtração de dois números.

    public function testSubtracao() {
        $Calculadora = new Calculadora(); // Instancia a classe Calculadora.
        $resultado = $Calculadora->subtracao(10, 4); // Realiza a subtração e armazena o resultado.

        $this->assertEquals(6, $resultado, "Teste de subtração falhou. Resultado: " . $resultado);
        // Usa a asserção assertEquals para verificar se o resultado é igual a 6.
        // Se a asserção falhar, exibe uma mensagem de erro com o valor real.

        if ($resultado === 6) {
            echo "Teste de subtração passou com sucesso!\n"; // Mensagem de sucesso se o resultado for 6.
        }
    }

    // Função de teste para verificar a multiplicação de dois números.
    public function testMultiplicacao() {
        $Calculadora = new Calculadora(); // Instancia a classe Calculadora.
        $resultado = $Calculadora->multiplicacao(6, 2); // Realiza a multiplicação e armazena o resultado.

        $this->assertEquals(12, $resultado, "Teste de multiplicação falhou. Resultado: " . $resultado);
        // Usa a asserção assertEquals para verificar se o resultado é igual a 12.
        // Se a asserção falhar, exibe uma mensagem de erro com o valor real.

        if ($resultado === 12) {
            echo "Teste de multiplicação passou com sucesso!\n"; // Mensagem de sucesso se o resultado for 12.
        }
    }

    // Função de teste para verificar a divisão de dois números.
    public function testDivisao() {
        $Calculadora = new Calculadora(); // Instancia a classe Calculadora.
        $resultado = $Calculadora->divisao(10, 2); // Realiza a divisão e armazena o resultado.

        $this->assertEquals(5, $resultado, "Teste de divisão falhou. Resultado: " . $resultado);
        // Usa a asserção assertEquals para verificar se o resultado é igual a 5.
        // Se a asserção falhar, exibe uma mensagem de erro com o valor real.

        if ($resultado === 5) {
            echo "Teste de divisão passou com sucesso!\n"; // Mensagem de sucesso se o resultado for 5.
        }
    }

    // Função de teste para verificar a divisão por zero.
    public function testDivisaoPorZero() {
        $Calculadora = new Calculadora();

        try {
            $Calculadora->divisao(10, 0); // Tenta realizar a divisão por zero.

            echo "Falha: O teste de divisão por zero falhou. A exceção não foi lançada.\n";
            // Mensagem de falha se a exceção não for lançada.

        } catch (\InvalidArgumentException $e) {
            echo "Tudo OK: O teste de divisão por zero passou com sucesso!\n";
            // Mensagem de sucesso se a exceção for lançada corretamente.
        }
    }
}
