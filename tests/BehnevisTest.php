<?php

use PHPUnit\Framework\TestCase;

final class BehnevisTest extends TestCase
{
    public function testBehnevis()
    {
        require_once __DIR__ . '/../behnevis.php';
        $this->assertEquals('سلام!', behnevis('salaam!'));
    }
}
