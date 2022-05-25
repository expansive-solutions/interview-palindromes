<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class LongestPalindromeFinderTest extends TestCase
{
    public function testEmptyString(): void
    {
        $finder = new LongestPalindromeFinder();

        $this->assertNull($finder->find(''));
    }
}