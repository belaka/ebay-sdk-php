<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse;

class UpdateAReturnPolicyRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateAReturnPolicyRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse', $this->obj);
    }

    public function testExtendsSetReturnPolicyResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\SetReturnPolicyResponse', $this->obj);
    }
}
