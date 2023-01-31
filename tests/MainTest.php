<?php
namespace App;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * @covers \App\Main::index
     */
    public function testIndex(): void
    {
        $main = new Main();
        $this->assertEquals(0, $main->index());
    }

}