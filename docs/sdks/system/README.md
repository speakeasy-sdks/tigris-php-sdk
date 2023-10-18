# System
(*system*)

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

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
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


### Response

**[?\tigris\core\Models\Operations\HealthAPIHealthResponse](../../models/operations/HealthAPIHealthResponse.md)**


## getServerInfo

Provides the information about the server. This information includes returning the server version, etc.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
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


### Response

**[?\tigris\core\Models\Operations\ObservabilityGetInfoResponse](../../models/operations/ObservabilityGetInfoResponse.md)**


## observabilityQuotaUsage

Returns current namespace quota limits

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Shared\QuotaUsageRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new QuotaUsageRequest();

    $response = $sdk->system->observabilityQuotaUsage($request);

    if ($response->quotaUsageResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [\tigris\core\Models\Shared\QuotaUsageRequest](../../models/shared/QuotaUsageRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?\tigris\core\Models\Operations\ObservabilityQuotaUsageResponse](../../models/operations/ObservabilityQuotaUsageResponse.md)**


## queryQuotaLimits

Returns current namespace quota limits

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Shared\QuotaLimitsRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new QuotaLimitsRequest();

    $response = $sdk->system->queryQuotaLimits($request);

    if ($response->quotaLimitsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [\tigris\core\Models\Shared\QuotaLimitsRequest](../../models/shared/QuotaLimitsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?\tigris\core\Models\Operations\ObservabilityQuotaLimitsResponse](../../models/operations/ObservabilityQuotaLimitsResponse.md)**


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

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new QueryTimeSeriesMetricsRequest();
    $request->additionalFunctions = [
        new AdditionalFunction(),
    ];
    $request->branch = 'Concrete';
    $request->collection = 'Codes';
    $request->db = 'regional';
    $request->from = 498326;
    $request->function = QueryTimeSeriesMetricsRequestFunction::None;
    $request->metricName = 'transmit';
    $request->quantile = 5070.51;
    $request->spaceAggregatedBy = [
        'Southwest',
    ];
    $request->spaceAggregation = QueryTimeSeriesMetricsRequestSpaceAggregation::Sum;
    $request->tigrisOperation = QueryTimeSeriesMetricsRequestTigrisOperation::Read;
    $request->to = 741757;

    $response = $sdk->system->queryTimeSeriesMetrics($request);

    if ($response->queryTimeSeriesMetricsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Shared\QueryTimeSeriesMetricsRequest](../../models/shared/QueryTimeSeriesMetricsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\ObservabilityQueryTimeSeriesMetricsResponse](../../models/operations/ObservabilityQueryTimeSeriesMetricsResponse.md)**

