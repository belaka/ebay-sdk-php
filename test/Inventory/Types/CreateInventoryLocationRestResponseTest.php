<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use DTS\eBaySDK\Inventory\Types\CreateInventoryLocationRestResponse;

class CreateInventoryLocationRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateInventoryLocationRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\CreateInventoryLocationRestResponse', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
