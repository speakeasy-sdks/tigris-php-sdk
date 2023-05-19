# system

## Overview

The Observability section has APIs that provides full visibility into the health, metrics, and monitoring of the Server.

### Available Operations

* [getHealth](#gethealth) - Health Check
* [getServerInfo](#getserverinfo) - Information about the server
* [observabilityQuotaUsage](#observabilityquotausage) - Queries current namespace quota usage
* [queryQuotaLimits](#queryquotalimits) - Queries current namespace quota limits
* [queryTimeSeriesMetrics](#querytimeseriesmetrics) - Queries time series metrics

## getHealth

This endpoint can be used to check the liveness of the server.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->system->getHealth();

    if ($response->healthCheckResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getServerInfo

Provides the information about the server. This information includes returning the server version, etc.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->system->getServerInfo();

    if ($response->getInfoResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## observabilityQuotaUsage

Returns current namespace quota limits

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $request = [
        'accusantium' => 'porro',
        'eum' => 'quas',
    ]

    $response = $sdk->system->observabilityQuotaUsage($request);

    if ($response->quotaUsageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## queryQuotaLimits

Returns current namespace quota limits

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $request = [
        'consequuntur' => 'deleniti',
        'fugit' => 'fuga',
        'mollitia' => 'incidunt',
    ]

    $response = $sdk->system->queryQuotaLimits($request);

    if ($response->quotaLimitsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## queryTimeSeriesMetrics

Queries time series metrics

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Shared\QueryTimeSeriesMetricsRequest;
use \tigris\core\Models\Shared\AdditionalFunction;
use \tigris\core\Models\Shared\RollupFunction;
use \tigris\core\Models\Shared\RollupFunctionAggregator;
use \tigris\core\Models\Shared\QueryTimeSeriesMetricsRequestFunction;
use \tigris\core\Models\Shared\QueryTimeSeriesMetricsRequestSpaceAggregation;
use \tigris\core\Models\Shared\QueryTimeSeriesMetricsRequestTigrisOperation;

$sdk = SDK::builder()
    ->build();

try {
    $request = new QueryTimeSeriesMetricsRequest();
    $request->additionalFunctions = [
        new AdditionalFunction(),
        new AdditionalFunction(),
        new AdditionalFunction(),
    ];
    $request->branch = 'explicabo';
    $request->collection = 'minima';
    $request->db = 'nisi';
    $request->from = 147014;
    $request->function = QueryTimeSeriesMetricsRequestFunction::NONE;
    $request->metricName = 'consequuntur';
    $request->quantile = 1871.31;
    $request->spaceAggregatedBy = [
        'saepe',
    ];
    $request->spaceAggregation = QueryTimeSeriesMetricsRequestSpaceAggregation::MAX;
    $request->tigrisOperation = QueryTimeSeriesMetricsRequestTigrisOperation::WRITE;
    $request->to = 92260;

    $response = $sdk->system->queryTimeSeriesMetrics($request);

    if ($response->queryTimeSeriesMetricsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
