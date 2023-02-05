<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\GetReturnRestResponse;

class GetReturnRestResponseTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetReturnRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnRestResponse', $this->obj);
    }

    public function testExtendsGetDetailResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetDetailResponse', $this->obj);
    }
}
