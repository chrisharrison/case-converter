<?php

declare(strict_types=1);

namespace ChrisHarrison\CaseConverter;

use Jawira\CaseConverter\Convert;

final class DefaultCaseConverter implements CaseConverter
{
    public function from(string $source): Convert
    {
        return new Convert($source);
    }
}
