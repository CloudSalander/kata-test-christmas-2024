<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include '../src/ChristmasTPrinter.php';

class ChristmasTreePrinterTest extends TestCase {
    //TODO: Maybe this out
    private const EMPTY_TREE = "|||";
    private const ONE_LEVEL_TREE = 
    "*
    |||";
    private const THREE_LEVEL_TREE =
    " *
     ***
    *****
     |||";

    public function setUp(): void {
        $this->treePrinter = new ChristmasTreePrinter();
    }
    public function testWontWorkIfInputNotNumeric(): void {

    }

    public function testWontWorkIfNLessThan0(): void {
    }
    public function test0LengthTree(): void {

    }
    
    public function test1LengthTree(): void {

    }

    public function test3LengthTree(): void {

    }

    public function testLargeLengthTree(): void {

    }

}
?>