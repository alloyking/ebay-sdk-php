<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Shopping\Types;

use DTS\eBaySDK\Shopping\Types\FindHalfProductsResponseType;

class FindHalfProductsResponseTypeTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new FindHalfProductsResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\FindHalfProductsResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\AbstractResponseType', $this->obj);
    }
}
