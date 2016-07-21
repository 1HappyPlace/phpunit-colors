#PHPUnitColors\Display#
[clio.1happyplace.com/utilities/phpunit-color-display.html](http://clio.1happyplace.com/utilities/phpunit-color-display.html)
 
 The Display class outputs colored output that will work on virtually any terminal.
 It utilizes the escape coding that goes back to the days of the DEC VT-100.  It
 can be used anywhere, but is geared toward messages during PHPUnit tests cases.
 
 It is a standalone static class with no dependencies.
 
 The following code will create the output below:
 
        // echo out the escaped strings to create different levels of warnings
        echo Display::warning("Warning!");
        echo Display::caution("Caution...");
        echo Display::OK("OK to go!");

        // place the escaped string in the $message field to light up your output
        $this->assertSame("one","two",Display::caution("This assertion has intentionally failed"));
 
 <img src="http://clio.1happyplace.com/_images/PHPUnitColors-Display.png">
