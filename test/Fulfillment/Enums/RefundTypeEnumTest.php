<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Fulfillment\Enums;

use DTS\eBaySDK\Fulfillment\Enums\RefundTypeEnum;

class RefundTypeEnumTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new RefundTypeEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Fulfillment\Enums\RefundTypeEnum', $this->obj);
    }
}
