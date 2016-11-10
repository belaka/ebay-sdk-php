<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\CreateCustomListRestRequest;

class CreateCustomListRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateCustomListRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateCustomListRestRequest', $this->obj);
    }

    public function testExtendsCreateCustomListRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateCustomListRequest', $this->obj);
    }
}
