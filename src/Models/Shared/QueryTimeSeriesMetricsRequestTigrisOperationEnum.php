<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


enum QueryTimeSeriesMetricsRequestTigrisOperationEnum: string
{
    case ALL = 'ALL';
    case READ = 'READ';
    case WRITE = 'WRITE';
    case METADATA = 'METADATA';
}
