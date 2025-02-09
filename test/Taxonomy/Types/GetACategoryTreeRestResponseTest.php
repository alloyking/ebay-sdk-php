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

use DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestResponse;

class GetACategoryTreeRestResponseTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetACategoryTreeRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestResponse', $this->obj);
    }

    public function testExtendsCategoryTree()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Taxonomy\Types\CategoryTree', $this->obj);
    }
}
