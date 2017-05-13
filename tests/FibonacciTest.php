<?php

// use PHPUnit\Framework\TestCase;

include_once(__DIR__ . '/../src/Fibonacci.php');

class FibonacciTest extends PHPUnit_Framework_TestCase // TestCase
{
    /** @var  Fibonacci $fibonacci */
    private $fibonacci;

    public function __construct()
    {
    }

    protected function setUp() {
        // Training Purpose: Initialization not necessary because all Fibonacci methods are static.
        $this->fibonacci = new Fibonacci();
    }

    public function testIfIndexIs1ValueIs0()
    {
        $nextItemNumber = $this->fibonacci->getNextItemNumber(1);
        $this->assertEquals(0, $nextItemNumber, sprintf('Result for index 1 should be 0 and got %s', $nextItemNumber));
    }

    public function testIfIndexIs2ValueIs1()
    {
        $nextItemNumber = $this->fibonacci->getNextItemNumber(2);
        $this->assertEquals(1, $nextItemNumber, sprintf('Result for index 2 should be 1 and got %s', $nextItemNumber));
    }

    public function testIfIndexIs3ValueIs1()
    {
        $nextItemNumber = $this->fibonacci->getNextItemNumber(3);
        $this->assertEquals(1, $nextItemNumber, sprintf('Result for index 3 should be 1 and got %s', $nextItemNumber));
    }

    public function testIfIndexIs4ValueIs2()
    {
        $nextItemNumber = $this->fibonacci->getNextItemNumber(4);
        $this->assertEquals(2, $nextItemNumber, sprintf('Result for index 4 should be 2 and got %s', $nextItemNumber));
    }

    public function test6firstFibonacciSequenceNumbers()
    {
        $pairs = array('1' => 0, '2' => 1, '3' => 1, '4' => 2, '5' => 3, '6' => 5);
        foreach ($pairs as $index => $sequenceNumber) {
             $gottenSequenceNumber = $this->fibonacci->getNextItemNumber((int)$index);
             $this->assertEquals($sequenceNumber, $gottenSequenceNumber, sprintf('Result for index %s should be %s and got %s', $index, $sequenceNumber, $gottenSequenceNumber));
        }
    }
}
