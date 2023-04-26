# appKey

## Overview

The application keys section provide APIs that can be used to manage application keys for your project. A single project can have one or more application keys.

### Available Operations

* [delete](#delete) - Deletes the app key
* [list](#list) - List all the app keys
* [rotate](#rotate) - Rotates the app key secret
* [tigrisCreateAppKey](#tigriscreateappkey) - Creates the app key
* [update](#update) - Updates the description of the app key

## delete

Delete an app key.

### Example Usage

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
    $request->deleteAppKeyRequest->id = '05dfc2dd-f7cc-478c-a1ba-928fc816742c';
    $request->project = 'cum';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## list

Lists all app keys visible to requesting actor.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisListAppKeysRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisListAppKeysRequest();
    $request->project = 'esse';

    $response = $sdk->appKey->list($request);

    if ($response->listAppKeysResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## rotate

Endpoint is used to rotate the secret for the app key.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisRotateAppKeySecretRequest;
use \tigris\core\Models\Shared\RotateAppKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisRotateAppKeySecretRequest();
    $request->rotateAppKeyRequest = new RotateAppKeyRequest();
    $request->rotateAppKeyRequest->id = '39205929-396f-4ea7-996e-b10faaa2352c';
    $request->rotateAppKeyRequest->project = 'enim';
    $request->project = 'omnis';

    $response = $sdk->appKey->rotate($request);

    if ($response->rotateAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## tigrisCreateAppKey

Create an app key.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisCreateAppKeyRequest;
use \tigris\core\Models\Shared\CreateAppKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisCreateAppKeyRequest();
    $request->createAppKeyRequest = new CreateAppKeyRequest();
    $request->createAppKeyRequest->description = 'nemo';
    $request->createAppKeyRequest->name = 'Velma Batz';
    $request->project = 'doloribus';

    $response = $sdk->appKey->tigrisCreateAppKey($request);

    if ($response->createAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## update

Update the description of an app key.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisUpdateAppKeyRequest;
use \tigris\core\Models\Shared\UpdateAppKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisUpdateAppKeyRequest();
    $request->updateAppKeyRequest = new UpdateAppKeyRequest();
    $request->updateAppKeyRequest->description = 'sapiente';
    $request->updateAppKeyRequest->id = '1a3a2fa9-4677-4392-91aa-52c3f5ad019d';
    $request->updateAppKeyRequest->name = 'Ryan Witting';
    $request->project = 'nihil';

    $response = $sdk->appKey->update($request);

    if ($response->updateAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
