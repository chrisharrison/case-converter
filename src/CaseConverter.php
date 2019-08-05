<?php

declare(strict_types=1);

namespace ChrisHarrison\CaseConverter;

use Jawira\CaseConverter\Convert;

interface CaseConverter
{
    public function from(string $source): Convert;
}
