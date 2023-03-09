<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


enum QueryTimeSeriesMetricsRequestFunctionEnum: string
{
    case RATE = 'RATE';
    case COUNT = 'COUNT';
    case NONE = 'NONE';
}
