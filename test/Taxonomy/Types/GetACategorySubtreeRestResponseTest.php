<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Taxonomy\Types;

use DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestResponse;

class GetACategorySubtreeRestResponseTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetACategorySubtreeRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestResponse', $this->obj);
    }

    public function testExtendsCategorySubtree()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Taxonomy\Types\CategorySubtree', $this->obj);
    }
}
