<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\GetAccountPrivilegesRestResponse;

class GetAccountPrivilegesRestResponseTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetAccountPrivilegesRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\GetAccountPrivilegesRestResponse', $this->obj);
    }

    public function testExtendsSellingPrivileges()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\SellingPrivileges', $this->obj);
    }
}
