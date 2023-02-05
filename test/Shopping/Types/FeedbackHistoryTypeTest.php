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

use DTS\eBaySDK\Shopping\Types\FeedbackHistoryType;

class FeedbackHistoryTypeTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new FeedbackHistoryType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\FeedbackHistoryType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
