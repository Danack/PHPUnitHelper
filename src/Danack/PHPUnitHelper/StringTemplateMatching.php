<?php

declare(strict_types = 1);

namespace Danack\PHPUnitHelper;

use PHPUnit\Framework\TestCase;

/** @mixin TestCase */
trait StringTemplateMatching
{
    /**
     * @param $string
     * @param $message
     */
    public function assertMessagesMatchesTemplateString(string $string, string $message): void
    {
        $regExp = templateStringToRegExp($string);
        $this->assertRegExp($regExp, $message);
    }

    /**
     * @param $string
     */
    public function expectExceptionMessageMatchesTemplateString(string $string): void
    {
        $regexp = templateStringToRegExp($string);
        $this->expectExceptionMessageMatches($regexp);
    }
}
