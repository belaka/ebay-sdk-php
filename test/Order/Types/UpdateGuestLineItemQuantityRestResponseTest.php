<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Order\Types;

use DTS\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestResponse;

class UpdateGuestLineItemQuantityRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateGuestLineItemQuantityRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestResponse', $this->obj);
    }

    public function testExtendsCheckoutSessionResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\CheckoutSessionResponse', $this->obj);
    }
}
