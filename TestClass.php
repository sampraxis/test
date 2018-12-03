<?php

use PHPUnit\Framework\TestCase;

class TestClass extends TestCase
{
    public function testFailure()
    {
        $this->assertArrayHasKey('foo', ['foo' => 'baz']);
    }
}