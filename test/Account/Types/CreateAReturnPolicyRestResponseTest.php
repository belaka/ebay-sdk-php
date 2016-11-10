<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\CreateAReturnPolicyRestResponse;

class CreateAReturnPolicyRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateAReturnPolicyRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\CreateAReturnPolicyRestResponse', $this->obj);
    }

    public function testExtendsSetReturnPolicyResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\SetReturnPolicyResponse', $this->obj);
    }
}
