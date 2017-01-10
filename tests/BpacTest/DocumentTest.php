<?php

namespace BpacTest;

use atans\bpac\Document;
use atans\bpac\PrintOptionConstants;

class DocumentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Document
     */
    protected $document;

    /**
     * @var array
     */
    protected $config;

    public function setUp()
    {
        $this->document = new Document();

        $this->config = $GLOBALS['config'];
        parent::setUp();
    }

    public function testDefaultPrinter()
    {
        $this->assertEquals($this->config['printer_name'], $this->document->Printer->Name);
    }

    public function testPrint()
    {
        $this->assertTrue($this->document->Open(realpath(__DIR__ . '/../assets/device.lbx')));

        $this->assertEquals('BROTHER', $this->document->GetObject('brand')->Text);
        $this->document->GetObject('brand')->Text = 'ThinkPad';

        $this->assertEquals('ThinkPad', $this->document->GetObject('brand')->Text);


        $this->assertEquals('PT P700', $this->document->GetObject('model')->Text);
        $this->document->GetObject('model')->Text = 'W500';

        $this->document->GetObject('qrcode')->Text = 'http://t.cn/RIp44V9';
        $this->document->GetObject('date')->Text = '16/12/26';

        $this->assertTrue($this->document->StartPrint('', PrintOptionConstants::bpoDefault));
        $this->assertTrue($this->document->PrintOut(1, PrintOptionConstants::bpoDefault));
        $this->assertTrue($this->document->EndPrint());
        $this->assertTrue($this->document->Close());
    }
}
