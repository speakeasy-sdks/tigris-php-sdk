<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


enum QueryTimeSeriesMetricsRequestSpaceAggregationEnum: string
{
    case AVG = 'AVG';
    case MIN = 'MIN';
    case MAX = 'MAX';
    case SUM = 'SUM';
}