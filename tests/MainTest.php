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
        $this->assertEquals("3", $main->add("1,2"));
		$this->assertEquals("0", $main->add(""));
    }

}
