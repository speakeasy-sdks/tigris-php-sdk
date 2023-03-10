<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


enum RollupFunctionAggregatorEnum: string
{
    case ROLLUP_AGGREGATOR_SUM = 'ROLLUP_AGGREGATOR_SUM';
    case ROLLUP_AGGREGATOR_COUNT = 'ROLLUP_AGGREGATOR_COUNT';
    case ROLLUP_AGGREGATOR_MIN = 'ROLLUP_AGGREGATOR_MIN';
    case ROLLUP_AGGREGATOR_MAX = 'ROLLUP_AGGREGATOR_MAX';
    case ROLLUP_AGGREGATOR_AVG = 'ROLLUP_AGGREGATOR_AVG';
}
