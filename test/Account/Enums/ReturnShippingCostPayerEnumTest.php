<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Account\Enums;

use DTS\eBaySDK\Account\Enums\ReturnShippingCostPayerEnum;

class ReturnShippingCostPayerEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReturnShippingCostPayerEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Enums\ReturnShippingCostPayerEnum', $this->obj);
    }
}
