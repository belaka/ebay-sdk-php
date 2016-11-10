<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use DTS\eBaySDK\Inventory\Types\GetInventoryLocationsRestResponse;

class GetInventoryLocationsRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetInventoryLocationsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\GetInventoryLocationsRestResponse', $this->obj);
    }

    public function testExtendsLocationResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\LocationResponse', $this->obj);
    }
}
