# Cache


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

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CacheCreateCacheRequest();
    $request->createCacheRequest = new Shared\CreateCacheRequest();
    $request->createCacheRequest->options = new Shared\CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 481196;
    $request->name = 'string';
    $request->project = 'string';

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
| `$request`                                                                                                   | [\tigris\core\Models\Operations\CacheCreateCacheRequest](../../Models/Operations/CacheCreateCacheRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\tigris\core\Models\Operations\CacheCreateCacheResponse](../../Models/Operations/CacheCreateCacheResponse.md)**


## delete

Deletes the cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CacheDeleteCacheRequest();
    $request->deleteCacheRequest = new Shared\DeleteCacheRequest();
    $request->name = 'string';
    $request->project = 'string';

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
| `$request`                                                                                                   | [\tigris\core\Models\Operations\CacheDeleteCacheRequest](../../Models/Operations/CacheDeleteCacheRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\tigris\core\Models\Operations\CacheDeleteCacheResponse](../../Models/Operations/CacheDeleteCacheResponse.md)**


## deleteKeys

Deletes an entry from cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CacheDelRequest();
    $request->delRequest = new Shared\DelRequest();
    $request->key = '<key>';
    $request->name = 'string';
    $request->project = 'string';

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
| `$request`                                                                                   | [\tigris\core\Models\Operations\CacheDelRequest](../../Models/Operations/CacheDelRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\tigris\core\Models\Operations\CacheDelResponse](../../Models/Operations/CacheDelResponse.md)**


## getKey

Reads an entry from cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CacheGetRequest();
    $request->key = '<key>';
    $request->name = 'string';
    $request->project = 'string';

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
| `$request`                                                                                   | [\tigris\core\Models\Operations\CacheGetRequest](../../Models/Operations/CacheGetRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\tigris\core\Models\Operations\CacheGetResponse](../../Models/Operations/CacheGetResponse.md)**


## getSetKey

Sets an entry in the cache and returns the previous value if exists

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CacheGetSetRequest();
    $request->getSetRequest = new Shared\GetSetRequest();
    $request->getSetRequest->value = 'string';
    $request->key = '<key>';
    $request->name = 'string';
    $request->project = 'string';

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
| `$request`                                                                                         | [\tigris\core\Models\Operations\CacheGetSetRequest](../../Models/Operations/CacheGetSetRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\tigris\core\Models\Operations\CacheGetSetResponse](../../Models/Operations/CacheGetSetResponse.md)**


## list

Lists all the caches for the given project

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CacheListCachesRequest();
    $request->project = 'string';

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
| `$request`                                                                                                 | [\tigris\core\Models\Operations\CacheListCachesRequest](../../Models/Operations/CacheListCachesRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\tigris\core\Models\Operations\CacheListCachesResponse](../../Models/Operations/CacheListCachesResponse.md)**


## listKeys

Lists all the key for this cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CacheKeysRequest();
    $request->count = 618311;
    $request->cursor = 739921;
    $request->name = 'string';
    $request->pattern = 'string';
    $request->project = 'string';

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
| `$request`                                                                                     | [\tigris\core\Models\Operations\CacheKeysRequest](../../Models/Operations/CacheKeysRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\tigris\core\Models\Operations\CacheKeysResponse](../../Models/Operations/CacheKeysResponse.md)**


## setKey

Sets an entry in the cache

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CacheSetRequest();
    $request->setRequest = new Shared\SetRequest();
    $request->setRequest->ex = 170966;
    $request->setRequest->nx = false;
    $request->setRequest->px = 17597;
    $request->setRequest->value = 'string';
    $request->setRequest->xx = false;
    $request->key = '<key>';
    $request->name = 'string';
    $request->project = 'string';

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
| `$request`                                                                                   | [\tigris\core\Models\Operations\CacheSetRequest](../../Models/Operations/CacheSetRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\tigris\core\Models\Operations\CacheSetResponse](../../Models/Operations/CacheSetResponse.md)**

