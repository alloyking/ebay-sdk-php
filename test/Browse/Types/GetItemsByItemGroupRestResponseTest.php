<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Browse\Types;

use DTS\eBaySDK\Browse\Types\GetItemsByItemGroupRestResponse;

class GetItemsByItemGroupRestResponseTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetItemsByItemGroupRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\GetItemsByItemGroupRestResponse', $this->obj);
    }

    public function testExtendsItems()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\Items', $this->obj);
    }
}
