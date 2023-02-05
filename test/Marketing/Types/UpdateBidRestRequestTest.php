<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\UpdateBidRestRequest;

class UpdateBidRestRequestTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new UpdateBidRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\UpdateBidRestRequest', $this->obj);
    }

    public function testExtendsUpdateBidPercentageRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\UpdateBidPercentageRequest', $this->obj);
    }
}
