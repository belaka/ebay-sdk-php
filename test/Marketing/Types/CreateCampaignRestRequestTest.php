<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\CreateCampaignRestRequest;

class CreateCampaignRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateCampaignRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\CreateCampaignRestRequest', $this->obj);
    }

    public function testExtendsCreateCampaignRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\CreateCampaignRequest', $this->obj);
    }
}
