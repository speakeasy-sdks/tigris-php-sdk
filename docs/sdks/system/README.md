# System


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

use \tigris\core;
use \tigris\core\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->system->getHealth();

    if ($response->healthCheckResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\tigris\core\Models\Operations\HealthAPIHealthResponse](../../Models/Operations/HealthAPIHealthResponse.md)**


## getServerInfo

Provides the information about the server. This information includes returning the server version, etc.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->system->getServerInfo();

    if ($response->getInfoResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\tigris\core\Models\Operations\ObservabilityGetInfoResponse](../../Models/Operations/ObservabilityGetInfoResponse.md)**


## observabilityQuotaUsage

Returns current namespace quota limits

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\QuotaUsageRequest();;

    $response = $sdk->system->observabilityQuotaUsage($request);

    if ($response->quotaUsageResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [\tigris\core\Models\Shared\QuotaUsageRequest](../../Models/Shared/QuotaUsageRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?\tigris\core\Models\Operations\ObservabilityQuotaUsageResponse](../../Models/Operations/ObservabilityQuotaUsageResponse.md)**


## queryQuotaLimits

Returns current namespace quota limits

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\QuotaLimitsRequest();;

    $response = $sdk->system->queryQuotaLimits($request);

    if ($response->quotaLimitsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [\tigris\core\Models\Shared\QuotaLimitsRequest](../../Models/Shared/QuotaLimitsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?\tigris\core\Models\Operations\ObservabilityQuotaLimitsResponse](../../Models/Operations/ObservabilityQuotaLimitsResponse.md)**


## queryTimeSeriesMetrics

Queries time series metrics

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\QueryTimeSeriesMetricsRequest();
    $request->additionalFunctions = [
        new Shared\AdditionalFunction(),
    ];
    $request->branch = 'string';
    $request->collection = 'string';
    $request->db = 'string';
    $request->from = 262768;
    $request->function = Shared\FunctionT::None;
    $request->metricName = 'string';
    $request->quantile = 3054.25;
    $request->spaceAggregatedBy = [
        'string',
    ];
    $request->spaceAggregation = Shared\SpaceAggregation::Max;
    $request->tigrisOperation = Shared\TigrisOperation::Read;
    $request->to = 424991;;

    $response = $sdk->system->queryTimeSeriesMetrics($request);

    if ($response->queryTimeSeriesMetricsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Shared\QueryTimeSeriesMetricsRequest](../../Models/Shared/QueryTimeSeriesMetricsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\ObservabilityQueryTimeSeriesMetricsResponse](../../Models/Operations/ObservabilityQueryTimeSeriesMetricsResponse.md)**

