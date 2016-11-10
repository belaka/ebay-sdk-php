<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\GetOptedInProgramsRestResponse;

class GetOptedInProgramsRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetOptedInProgramsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\GetOptedInProgramsRestResponse', $this->obj);
    }

    public function testExtendsPrograms()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\Programs', $this->obj);
    }
}
