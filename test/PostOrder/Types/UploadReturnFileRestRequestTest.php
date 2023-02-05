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

use DTS\eBaySDK\PostOrder\Types\UploadReturnFileRestRequest;

class UploadReturnFileRestRequestTest extends   \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp() : void
    {
        $this->obj = new UploadReturnFileRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\UploadReturnFileRestRequest', $this->obj);
    }

    public function testExtendsUploadFileRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\UploadFileRequest', $this->obj);
    }
}
