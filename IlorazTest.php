<?php

use PHPUnit\Framework\TestCase;

class IlorazTest extends TestCase
{
  private $iloraz;

  protected function setUp()
  {
    $this->iloraz = new Iloraz;
  }

  protected function tearDown()
  {
    unset($this->iloraz);
  }

  public function testDzielDodatnie()
  {
    $wynik = $this->iloraz->dziel(10, 5);
    $this->assertEquals(2, $wynik);
  }

  public function testDzielUjemne()
  {
    $wynik = $this->iloraz->dziel(-10, -2);
    $this->assertEquals(5, $wynik);
  }

  public function testDzielRozneZnaki()
  {
    $wynik = $this->iloraz->dziel(-1, 2);
    $this->assertEquals(-0.5, $wynik);
  }

  public function testDzielZero()
  {
    $wynik = $this->iloraz->dziel(3, 0);
    $this->assertEquals("Nie wolno dzielić przez 0", $wynik);
  }

  public function testDzielFloat()
  {
    $wynik = $this->iloraz->dziel(1.5, 1.5);
    $this->assertEquals(1, $wynik);
  }

  public function testDzielHuge()
  {
    $wynik = $this->iloraz->dziel(1, 17654654564056654);
    $this->assertEquals(0, $wynik);
  }
}
