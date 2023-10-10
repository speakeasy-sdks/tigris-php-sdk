# Cache
(*cache*)

## Overview

The cache section provide APIs that can be used to perform cache operations.

### Available Operations

* [create](#create) - Creates the cache
* [delete](#delete) - Deletes the cache
* [deleteKeys](#deletekeys) - Deletes an entry from cache
* [getKey](#getkey) - Reads an entry from cache
* [getSetKey](#getsetkey) - Sets an entry in the cache and returns the previous value if exists
* [list](#list) - Lists all the caches for the given project
* [listKeys](#listkeys) - Lists all the key for this cache
* [setKey](#setkey) - Sets an entry in the cache

## create

Creates the cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 481196;
    $request->name = 'Tasty island Southwest';
    $request->project = 'National Lauderhill';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\tigris\core\Models\Operations\CacheCreateCacheRequest](../../models/operations/CacheCreateCacheRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\tigris\core\Models\Operations\CacheCreateCacheResponse](../../models/operations/CacheCreateCacheResponse.md)**


## delete

Deletes the cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheDeleteCacheRequest;
use \tigris\core\Models\Shared\DeleteCacheRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CacheDeleteCacheRequest();
    $request->deleteCacheRequest = new DeleteCacheRequest();
    $request->name = 'Architect Cotton port';
    $request->project = 'qua';

    $response = $sdk->cache->delete($request);

    if ($response->deleteCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\tigris\core\Models\Operations\CacheDeleteCacheRequest](../../models/operations/CacheDeleteCacheRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\tigris\core\Models\Operations\CacheDeleteCacheResponse](../../models/operations/CacheDeleteCacheResponse.md)**


## deleteKeys

Deletes an entry from cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheDelRequest;
use \tigris\core\Models\Shared\DelRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CacheDelRequest();
    $request->delRequest = new DelRequest();
    $request->key = '<key>';
    $request->name = 'man Seamless before';
    $request->project = 'Diesel';

    $response = $sdk->cache->deleteKeys($request);

    if ($response->delResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\tigris\core\Models\Operations\CacheDelRequest](../../models/operations/CacheDelRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\tigris\core\Models\Operations\CacheDelResponse](../../models/operations/CacheDelResponse.md)**


## getKey

Reads an entry from cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheGetRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CacheGetRequest();
    $request->key = '<key>';
    $request->name = 'lux robust';
    $request->project = 'index';

    $response = $sdk->cache->getKey($request);

    if ($response->getResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\tigris\core\Models\Operations\CacheGetRequest](../../models/operations/CacheGetRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\tigris\core\Models\Operations\CacheGetResponse](../../models/operations/CacheGetResponse.md)**


## getSetKey

Sets an entry in the cache and returns the previous value if exists

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheGetSetRequest;
use \tigris\core\Models\Shared\GetSetRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CacheGetSetRequest();
    $request->getSetRequest = new GetSetRequest();
    $request->getSetRequest->value = 'Bronze';
    $request->key = '<key>';
    $request->name = 'portal salmon';
    $request->project = 'kelvin Harbors';

    $response = $sdk->cache->getSetKey($request);

    if ($response->getSetResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\tigris\core\Models\Operations\CacheGetSetRequest](../../models/operations/CacheGetSetRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\tigris\core\Models\Operations\CacheGetSetResponse](../../models/operations/CacheGetSetResponse.md)**


## list

Lists all the caches for the given project

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheListCachesRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CacheListCachesRequest();
    $request->project = 'Bronze Architect';

    $response = $sdk->cache->list($request);

    if ($response->listCachesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\tigris\core\Models\Operations\CacheListCachesRequest](../../models/operations/CacheListCachesRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\tigris\core\Models\Operations\CacheListCachesResponse](../../models/operations/CacheListCachesResponse.md)**


## listKeys

Lists all the key for this cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheKeysRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CacheKeysRequest();
    $request->count = 618311;
    $request->cursor = 739921;
    $request->name = 'invoice pink';
    $request->pattern = 'whose West vivid';
    $request->project = 'compelling duh';

    $response = $sdk->cache->listKeys($request);

    if ($response->keysResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\tigris\core\Models\Operations\CacheKeysRequest](../../models/operations/CacheKeysRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\tigris\core\Models\Operations\CacheKeysResponse](../../models/operations/CacheKeysResponse.md)**


## setKey

Sets an entry in the cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheSetRequest;
use \tigris\core\Models\Shared\SetRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CacheSetRequest();
    $request->setRequest = new SetRequest();
    $request->setRequest->ex = 170966;
    $request->setRequest->nx = false;
    $request->setRequest->px = 17597;
    $request->setRequest->value = 'monetize';
    $request->setRequest->xx = false;
    $request->key = '<key>';
    $request->name = 'Shanahan Phased';
    $request->project = 'Gasoline';

    $response = $sdk->cache->setKey($request);

    if ($response->setResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\tigris\core\Models\Operations\CacheSetRequest](../../models/operations/CacheSetRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\tigris\core\Models\Operations\CacheSetResponse](../../models/operations/CacheSetResponse.md)**

