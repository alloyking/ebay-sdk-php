<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Metadata\Types;

use DTS\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestResponse;

class GetPoliciesForAutoPartsCompatibilityRestResponseTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetPoliciesForAutoPartsCompatibilityRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestResponse', $this->obj);
    }

    public function testExtendsAutomotivePartsCompatibilityPolicyResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\AutomotivePartsCompatibilityPolicyResponse', $this->obj);
    }
}
