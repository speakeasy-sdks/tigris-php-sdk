# AppKey

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
    $request->deleteAppKeyRequest->id = 'd69a674e-0f46-47cc-8796-ed151a05dfc2';
    $request->project = 'at';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Operations\TigrisDeleteAppKeyRequest](../../models/operations/TigrisDeleteAppKeyRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisDeleteAppKeyResponse](../../models/operations/TigrisDeleteAppKeyResponse.md)**


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
    $request->project = 'at';

    $response = $sdk->appKey->list($request);

    if ($response->listAppKeysResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\tigris\core\Models\Operations\TigrisListAppKeysRequest](../../models/operations/TigrisListAppKeysRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\tigris\core\Models\Operations\TigrisListAppKeysResponse](../../models/operations/TigrisListAppKeysResponse.md)**


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
    $request->rotateAppKeyRequest->id = 'f7cc78ca-1ba9-428f-8816-742cb7392059';
    $request->rotateAppKeyRequest->project = 'sed';
    $request->project = 'iste';

    $response = $sdk->appKey->rotate($request);

    if ($response->rotateAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\tigris\core\Models\Operations\TigrisRotateAppKeySecretRequest](../../models/operations/TigrisRotateAppKeySecretRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\tigris\core\Models\Operations\TigrisRotateAppKeySecretResponse](../../models/operations/TigrisRotateAppKeySecretResponse.md)**


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
    $request->createAppKeyRequest->description = 'dolor';
    $request->createAppKeyRequest->name = 'Lester Welch';
    $request->project = 'in';

    $response = $sdk->appKey->tigrisCreateAppKey($request);

    if ($response->createAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Operations\TigrisCreateAppKeyRequest](../../models/operations/TigrisCreateAppKeyRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisCreateAppKeyResponse](../../models/operations/TigrisCreateAppKeyResponse.md)**


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
    $request->updateAppKeyRequest->description = 'corporis';
    $request->updateAppKeyRequest->id = '96eb10fa-aa23-452c-9955-907aff1a3a2f';
    $request->updateAppKeyRequest->name = 'Tracy Fritsch';
    $request->project = 'molestiae';

    $response = $sdk->appKey->update($request);

    if ($response->updateAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Operations\TigrisUpdateAppKeyRequest](../../models/operations/TigrisUpdateAppKeyRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisUpdateAppKeyResponse](../../models/operations/TigrisUpdateAppKeyResponse.md)**

