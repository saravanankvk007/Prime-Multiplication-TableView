<?php
require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class primeTestCase extends TestCase
{
	public function __construct($name = 'PrimeTestCase', array $data = [], $dataName = '') {
        parent::__construct($name, $data, $dataName);
    }
	private function generatePrimes($limit) {
        $primes = [];
        for ($num = 2; $num < $limit; $num++) {
            if ($this->isPrime($num)) {
                $primes[] = $num;
            }
        }
        return $primes;
    }
	public function isPrime($num) {
		 if($num <= 1) return false;
		 
		 for($i=2; $i<= sqrt($num); $i++){
			 if($num %$i == 0) return false;
		 }
		 
		 return true;
	}
    public function testGeneratePrimes()
    {
        $this->assertEquals([2], $this->generatePrimes(1));
        $this->assertEquals([2, 3], $this->generatePrimes(2));
        $this->assertEquals([2, 3, 5], $this->generatePrimes(3));
        $this->assertEquals([2, 3, 5, 7], $this->generatePrimes(4));
    }
	
    public function testIsPrime()
    {
        $this->assertTrue($this->isPrime(2));
        $this->assertTrue($this->isPrime(3));
        $this->assertFalse($this->isPrime(4));
        $this->assertTrue($this->isPrime(5));
        $this->assertFalse($this->isPrime(1));
        $this->assertFalse($this->isPrime(-5));
    }
}

?>