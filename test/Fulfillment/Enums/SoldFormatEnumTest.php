<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Fulfillment\Enums;

use DTS\eBaySDK\Fulfillment\Enums\SoldFormatEnum;

class SoldFormatEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SoldFormatEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Fulfillment\Enums\SoldFormatEnum', $this->obj);
    }
}
