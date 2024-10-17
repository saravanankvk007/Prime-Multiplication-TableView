<?php
use PHPUnit\Framework\TestCase;

class PrimeTest extends TestCase
{
    public function testGeneratePrimes()
    {
        $this->assertEquals([2], generatePrimes(1));
        $this->assertEquals([2, 3], generatePrimes(2));
        $this->assertEquals([2, 3, 5], generatePrimes(3));
        $this->assertEquals([2, 3, 5, 7], generatePrimes(4));
    }
    public function testIsPrime()
    {
        $this->assertTrue(isPrime(2));
        $this->assertTrue(isPrime(3));
        $this->assertFalse(isPrime(4));
        $this->assertTrue(isPrime(5));
        $this->assertFalse(isPrime(1));
        $this->assertFalse(isPrime(-5));
    }
}

?>