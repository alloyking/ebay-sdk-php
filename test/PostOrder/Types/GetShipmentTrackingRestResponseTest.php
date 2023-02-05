<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\GetShipmentTrackingRestResponse;

class GetShipmentTrackingRestResponseTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetShipmentTrackingRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetShipmentTrackingRestResponse', $this->obj);
    }

    public function testExtendsGetTrackingHistoryResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetTrackingHistoryResponse', $this->obj);
    }
}
