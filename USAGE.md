<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use tigris\core\SDK;
use tigris\core\Models\Shared\Security;
use tigris\core\Models\Operations\CacheCreateCacheRequest;
use tigris\core\Models\Shared\CreateCacheRequest;
use tigris\core\Models\Shared\CreateCacheOptions;

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
<!-- End SDK Example Usage -->