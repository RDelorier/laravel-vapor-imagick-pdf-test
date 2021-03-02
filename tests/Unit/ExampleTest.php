<?php

namespace Tests\Unit;

use Imagick;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $img = new Imagick(__DIR__.'/example.pdf');
        $this->assertEquals(1, $img->getNumberImages());
    }
}
