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

use DTS\eBaySDK\Marketing\Types\GetMetadataForAllReportsRestResponse;

class GetMetadataForAllReportsRestResponseTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new GetMetadataForAllReportsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\GetMetadataForAllReportsRestResponse', $this->obj);
    }

    public function testExtendsReportMetadatas()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\ReportMetadatas', $this->obj);
    }
}
