<?php

namespace BpacTest;

use atans\bpac\Printer;

class PrinterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Printer
     */
    protected $printer;

    /**
     * @var array
     */
    protected $config;

    public function setUp()
    {
        $this->printer = new Printer();

        $this->config = $GLOBALS['config'];
        parent::setUp();
    }

    public function testGetInstalledPrinter()
    {
        $this->assertGreaterThan(0, count($this->printer->GetInstalledPrinters()));
    }

    public function testPropertyErrorCode()
    {
        $this->assertEquals(0, $this->printer->ErrorCode);
    }

    public function testIsPrinterSupported()
    {
        $this->assertTrue($this->printer->IsPrinterSupported($this->config['printer_name']));
    }

    public function testIsPrinterOnline()
    {
        $this->assertTrue($this->printer->IsPrinterOnline($this->config['printer_name']));
    }
}
