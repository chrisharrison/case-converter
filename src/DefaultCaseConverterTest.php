<?php

declare(strict_types=1);

namespace ChrisHarrison\CaseConverter;

use Jawira\CaseConverter\Convert;
use PHPUnit\Framework\TestCase;

final class DefaultCaseConverterTest extends TestCase
{
    public function test_it_instantiates_a_new_Jawira_convert_object()
    {
        $converter = new DefaultCaseConverter;
        $instantiated = $converter->from('this is a test sentence');

        $this->assertInstanceOf(Convert::class, $instantiated);
        $this->assertEquals(['this', 'is', 'a', 'test', 'sentence'], $instantiated->toArray());
    }
}
