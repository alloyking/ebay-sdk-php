<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Types;

use DTS\eBaySDK\Trading\Types\FeedbackRequirementsType;

class FeedbackRequirementsTypeTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new FeedbackRequirementsType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\FeedbackRequirementsType', $this->obj);
    }

    public function testExtendsBooleanType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BooleanType', $this->obj);
    }
}
