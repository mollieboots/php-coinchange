<?php
    require_once "src/CoinCombo.php";

    class CoinComboTest extends PHPUnit_Framework_TestCase
    {
        function test_deconstruct()
        {
            //arrange
            $test_CoinCombo = new CoinCombo;
            $input = 30;

            //act
            $result = $test_CoinCombo->deconstruct($input);

            //assert
            $this->assertEquals([25,5], $result);

        }
    }
 ?>
