<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Catalog\Types;

use DTS\eBaySDK\Catalog\Types\GetProductMetadataRestResponse;

class GetProductMetadataRestResponseTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetProductMetadataRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\GetProductMetadataRestResponse', $this->obj);
    }

    public function testExtendsProductMetadata()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\ProductMetadata', $this->obj);
    }
}
