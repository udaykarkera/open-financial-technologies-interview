<?php

/**
 * Class General
 */
class General {

    /**
     * @return string
     */
    public static function takeInput(): string
    {
        $handle = fopen("php://stdin","r");
        $line = fgets($handle);
        return trim($line);
    }

    /**
     * @param array $printStmts
     */
    public static function printLines(array $printStmts)
    {
        echo implode(PHP_EOL,$printStmts) . PHP_EOL;
    }
}