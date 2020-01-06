<?php

use PHPUnit\Framework\TestCase;
use PHPUnitColors\Display;

class StringTest {
    public function __toString() {
        return "Hello";
    }
}

class DisplayTest extends TestCase
{


    public function setUp(): void
    {


    }

    public function tearDown(): void
    {

    }


    /**
     * static function warning($text, $newline = true)
     *
     * Display the text with a red background and white foreground
     * and end it with the newline character (if desired)
     *
     * @param mixed $text - the text of the message
     * @param boolean $newline - whether to append a new line
     */
    public function test_warning() {

        $color = "\e[41;97m";
        $clear = "\e[0m";

        // no carriage return
        $answer = Display::warning("start ",false);
        $this->assertSame("{$color}start {$clear}",$answer);

        // carriage return
        $answer = Display::warning("end");
        $this->assertSame("{$color}end{$clear}\n",$answer);

        // other types
        // integer
        $answer = Display::warning(123);
        $this->assertSame("{$color}123{$clear}\n",$answer);

        // float
        $answer = Display::warning(14.51);
        $this->assertSame("{$color}14.51{$clear}\n",$answer);

        // boolean
        $answer = Display::warning(true);
        $this->assertSame("{$color}1{$clear}\n",$answer);

        // object
        $test = new StringTest();
        $answer = Display::warning($test);
        $this->assertSame("{$color}Hello{$clear}\n",$answer);


    }

    /**
     * static function caution($text, $newline = true)
     *
     * Display the text with a yellow background and black foreground
     * and end it with the newline character (if desired)
     *
     * @param mixed $text - the text of the message
     * @param boolean $newline - whether to append a new line
     */
    public function test_caution() {
        $color = "\e[43;30m";
        $clear = "\e[0m";

        // no carriage return
        $answer = Display::caution("start ",false);
        $this->assertSame("{$color}start {$clear}",$answer);

        // carriage return
        $answer = Display::caution("end");
        $this->assertSame("{$color}end{$clear}\n",$answer);

    }

    /**
     * static function OK($text, $newline = true)
     *
     * Display the text with a green background and black foreground
     * and end it with the newline character (if desired)
     *
     * @param mixed $text - the text of the message
     * @param boolean $newline - whether to append a new line
     */
    public function test_OK() {
        $color = "\e[42;30m";
        $clear = "\e[0m";

        // no carriage return
        $answer = Display::OK("start ",false);
        $this->assertSame("{$color}start {$clear}",$answer);

        // carriage return
        $answer = Display::OK("end");
        $this->assertSame("{$color}end{$clear}\n",$answer);

    }

    // this test case is just to ensure that PHPUnit actually
    // shows the output
    // @expectFailure
    public function test_showOutput() {

        echo "\n";

        echo Display::warning("Warning!");
        echo Display::caution("Caution...");
        echo Display::OK("OK to go!");

        $this->assertSame("one","two",Display::caution("This assertion has intentionally failed"));


    }
}


