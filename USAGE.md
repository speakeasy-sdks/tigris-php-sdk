<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use tigris\core;
use tigris\core\Models\Shared;
use tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CacheCreateCacheRequest();
    $request->createCacheRequest = new Shared\CreateCacheRequest();
    $request->createCacheRequest->options = new Shared\CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 481196;
    $request->name = '<value>';
    $request->project = '<value>';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->