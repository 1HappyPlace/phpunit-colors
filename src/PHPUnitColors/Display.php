<?php

namespace PHPUnitColors;

/**
 * This class is part of the Clio Open Source project, Clio.1happyplace.com
 * Copyright, Katie Ayres, katie@1happyplace.com
 *
 * Available through the MIT license
 * @license MIT
 *
 * The Display class outputs colored output that will work on virtually any terminal.
 * It utilizes the escape coding that goes back to the days of the DEC VT-100.
 *
 * It is a standalone class with no dependencies.
 *
 */
class Display
{
    /**
     * The escape sequence that clears any active styling on the terminal.
     */
    const CLEAR = "\e[0m";

    /**
     * Warning escape sequence which sets the background color to red and the
     * foreground to white.
     */
    const WARNING = "\e[41;97m";

    /**
     * Caution escape sequence which sets the background color to yellow and the
     * foreground to black.
     */
    const CAUTION = "\e[43;30m";

    /**
     * OK escape sequence which sets the background color to green and the
     * foreground to black.
     */
    const OK      = "\e[42;30m";

    /**
     * Display the text with a red background and white foreground
     * and end it with the newline character (if desired)
     *
     * @param mixed $text - the text of the message
     * @param boolean $newline - whether to append a new line
     * 
     * @return string - the escaped sequence and the optional newline
     */
    public static function warning($text, $newline = true) {

        // echo the string surrounded with the escape coding to
        // display a warning
        $text = self::WARNING . $text . self::CLEAR;

        // if a carriage return was desired, send it out
        $text .= $newline ? "\n" : "";
        
        // return the escaped text
        return $text;

    }

    /**
     * Display the text with a yellow background and black foreground
     * and end it with the newline character (if desired)
     *
     * @param mixed $text - the text of the message
     * @param boolean $newline - whether to append a new line
     * 
     * @return string - the escaped sequence and the optional newline
     */
    public static function caution($text, $newline = true) {

        // echo the string surrounded with the escape coding to
        // display a cautionary message
        $text = self::CAUTION . $text . self::CLEAR;

        // if a carriage return was desired, send it out
        $text .= $newline ? "\n" : "";

        // return the escaped text
        return $text;
    }

    /**
     * Display the text with a green background and black foreground
     * and end it with the newline character (if desired)
     *
     * @param mixed $text - the text of the message
     * @param boolean $newline - whether to append a new line
     * 
     * @return string - the escaped sequence and the optional newline
     */
    public static function OK($text, $newline = true) {

        // echo the string surrounded with the escape coding to
        // display a positive message
        $text = self::OK . $text . self::CLEAR;

        // if a carriage return was desired, send it out
        $text .= $newline ? "\n" : "";
        
        // return the escaped text
        return $text;
    }

}


