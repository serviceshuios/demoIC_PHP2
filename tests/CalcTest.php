<?php
require_once realpath(__DIR__.'/../www/calc.php'); // Il s'agit du fichier de notre classe "calc"
use PHPUnit\Framework\TestCase;
 
class calcTest extends TestCase {
 
   public function testSum() {
        $this->assertEquals(2, calc::sum(1, 1));
        $this->assertEquals(12, calc::sum(9, 3));
        $this->assertEquals(7, calc::sum(7, 0));
        $this->assertEquals('erreur', calc::sum(11, 'a'));
        $this->assertEquals('erreur', calc::sum('f', 2));
        $this->assertEquals('erreur', calc::sum('j', 'd'));
    }
 
   public function testMinus() {
        $this->assertEquals(0, calc::minus(1, 1));
        $this->assertEquals(6, calc::minus(9, 3));
        $this->assertEquals(7, calc::minus(7, 0));
        $this->assertEquals('erreur', calc::minus(11, 'a'));
        $this->assertEquals('erreur', calc::minus('f', 2));
        $this->assertEquals('erreur', calc::minus('j', 'd'));
    }
 
   public function testMulti() {
        $this->assertEquals(1, calc::multi(1, 1));
        $this->assertEquals(27, calc::multi(9, 3));
        $this->assertEquals(0, calc::multi(7, 0));
        $this->assertEquals('erreur', calc::multi(11, 'a'));
        $this->assertEquals('erreur', calc::multi('f', 2));
        $this->assertEquals('erreur', calc::multi('j', 'd'));
    }
 
   public function testDivid() {
        $this->assertEquals(1, calc::divid(1, 1));
        $this->assertEquals(3, calc::divid(9, 3));
        $this->assertEquals('erreur', calc::divid(7, 0));
        $this->assertEquals('erreur', calc::divid(11, 'a'));
        $this->assertEquals('erreur', calc::divid('f', 2));
        $this->assertEquals('erreur', calc::divid('j', 'd'));
    }
 
}
?>