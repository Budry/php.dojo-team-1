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
        $this->assertEquals("8", $main->add("3,5"));
        $this->assertEquals("9", $main->add("3,5,1"));
        $this->assertEquals("3.3", $main->add("1.1, 2.2"));
        $this->assertEquals("3.3", $main->add("1.1\n2.2"));
		$this->assertEquals("Invalid input on pos: 3", $main->add("1.1,\n2.2"));
    }

}
