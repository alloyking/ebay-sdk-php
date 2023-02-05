<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\Test\Mocks\StatusCode;

class StatusCodeTraitTest extends   \PHPUnit\Framework\TestCase
{
    public function testCanSetStatusCode()
    {
        $s = new StatusCode(200);

        $this->assertEquals(200, $s->getStatusCode());
    }
}
