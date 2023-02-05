<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Merchandising\Types;

use DTS\eBaySDK\Merchandising\Types\GetRelatedCategoryItemsRequest;

class GetRelatedCategoryItemsRequestTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetRelatedCategoryItemsRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Merchandising\Types\GetRelatedCategoryItemsRequest', $this->obj);
    }

    public function testExtendsBaseMerchandisingServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Merchandising\Types\BaseMerchandisingServiceRequest', $this->obj);
    }
}
