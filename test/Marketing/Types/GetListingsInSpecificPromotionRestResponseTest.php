<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\GetListingsInSpecificPromotionRestResponse;

class GetListingsInSpecificPromotionRestResponseTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetListingsInSpecificPromotionRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\GetListingsInSpecificPromotionRestResponse', $this->obj);
    }

    public function testExtendsItemsPagedCollection()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\ItemsPagedCollection', $this->obj);
    }
}
