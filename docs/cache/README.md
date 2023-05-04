# cache

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 244425;
    $request->name = 'Miss Eugene Hauck';
    $request->project = 'enim';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheDeleteCacheRequest();
    $request->requestBody = [
        'quo' => 'sequi',
    ];
    $request->name = 'Vernon Ondricka Sr.';
    $request->project = 'error';

    $response = $sdk->cache->delete($request);

    if ($response->deleteCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheDelRequest();
    $request->requestBody = [
        'laborum' => 'quasi',
        'reiciendis' => 'voluptatibus',
        'vero' => 'nihil',
        'praesentium' => 'voluptatibus',
    ];
    $request->key = 'ipsa';
    $request->name = 'Mr. Jared Ritchie';
    $request->project = 'ut';

    $response = $sdk->cache->deleteKeys($request);

    if ($response->delResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheGetRequest();
    $request->key = 'maiores';
    $request->name = 'Stacy Gulgowski MD';
    $request->project = 'enim';

    $response = $sdk->cache->getKey($request);

    if ($response->getResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheGetSetRequest();
    $request->getSetRequest = new GetSetRequest();
    $request->getSetRequest->value = 'accusamus';
    $request->key = 'commodi';
    $request->name = 'Eric Emmerich';
    $request->project = 'excepturi';

    $response = $sdk->cache->getSetKey($request);

    if ($response->getSetResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheListCachesRequest();
    $request->project = 'pariatur';

    $response = $sdk->cache->list($request);

    if ($response->listCachesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheKeysRequest();
    $request->count = 265389;
    $request->cursor = 508969;
    $request->name = 'Grady Botsford';
    $request->pattern = 'veritatis';
    $request->project = 'itaque';

    $response = $sdk->cache->listKeys($request);

    if ($response->keysResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheSetRequest();
    $request->setRequest = new SetRequest();
    $request->setRequest->ex = 277718;
    $request->setRequest->nx = false;
    $request->setRequest->px = 318569;
    $request->setRequest->value = 'consequatur';
    $request->setRequest->xx = false;
    $request->key = 'est';
    $request->name = 'Benjamin O'Connell';
    $request->project = 'labore';

    $response = $sdk->cache->setKey($request);

    if ($response->setResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
