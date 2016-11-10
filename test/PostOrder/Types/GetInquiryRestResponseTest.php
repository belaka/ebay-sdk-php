<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\GetInquiryRestResponse;

class GetInquiryRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetInquiryRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetInquiryRestResponse', $this->obj);
    }

    public function testExtendsInquiryDetailsResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\InquiryDetailsResponse', $this->obj);
    }
}
