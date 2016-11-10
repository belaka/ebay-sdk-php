<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\GetReturnShippingLabelRestResponse;

class GetReturnShippingLabelRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnShippingLabelRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnShippingLabelRestResponse', $this->obj);
    }

    public function testExtendsGetShippingLabelResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetShippingLabelResponse', $this->obj);
    }
}
