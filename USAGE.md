<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->