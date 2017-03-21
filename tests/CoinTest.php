<?php

    require_once "src/Coins.php";

    class CoinsTest extends PHPUnit_Framework_TestCase
    {

          function testpenny()
          {
              $test_coin = new Coins;
              $input = .01;

              $result=$test_coin->coinNumber($input);

              $this->assertEquals("0001", $result);
          }
          function testpennies()
          {
              $test_coin = new Coins;
              $input = .04;

              $result=$test_coin->coinNumber($input);

              $this->assertEquals("0004", $result);
          }
          function testnickel()
          {
              $test_coin = new Coins;
              $input = .05;

              $result=$test_coin->coinNumber($input);

              $this->assertEquals("0010", $result);
          }
          function testnickelandpenny()
          {
              $test_coin = new Coins;
              $input = .06;

              $result=$test_coin->coinNumber($input);

              $this->assertEquals("0011", $result);
          }
          function testnickelandpennies()
          {
              $test_coin = new Coins;
              $input = .07;

              $result=$test_coin->coinNumber($input);

              $this->assertEquals("0012", $result);
          }
          function testdimeandnickel()
          {
              $test_coin = new Coins;
              $input = .15;

              $result=$test_coin->coinNumber($input);

              $this->assertEquals("0110", $result);
          }
          function testdimeandnickelandpenny()
          {
              $test_coin = new Coins;
              $input = .16;

              $result=$test_coin->coinNumber($input);

              $this->assertEquals("0111", $result);
          }
          function testquarteranddimeandnickelandpenny()
          {
              $test_coin = new Coins;
              $input = .42;

              $result=$test_coin->coinNumber($input);

              $this->assertEquals("1112", $result);
          }
          function testquarteranddimeandnickelandpenny1()
          {
              $test_coin = new Coins;
              $input = 1.98;

              $result=$test_coin->coinNumber($input);

              $this->assertEquals("7203", $result);
          }
    }


?>
