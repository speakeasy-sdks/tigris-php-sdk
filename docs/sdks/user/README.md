# user

## Overview

A User on the Tigris Platform.

### Available Operations

* [getMetadata](#getmetadata) - Reads the User Metadata
* [insertMetadata](#insertmetadata) - Inserts User Metadata
* [updateMetadata](#updatemetadata) - Updates User Metadata

## getMetadata

GetUserMetadata inserts the user metadata object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\ManagementGetUserMetadataRequest;
use \tigris\core\Models\Shared\GetUserMetadataRequest;
use \tigris\core\Models\Shared\GetUserMetadataRequestValue;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementGetUserMetadataRequest();
    $request->getUserMetadataRequest = new GetUserMetadataRequest();
    $request->getUserMetadataRequest->metadataKey = 'ullam';
    $request->getUserMetadataRequest->value = new GetUserMetadataRequestValue();
    $request->metadataKey = 'nam';

    $response = $sdk->user->getMetadata($request);

    if ($response->getUserMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\tigris\core\Models\Operations\ManagementGetUserMetadataRequest](../../models/operations/ManagementGetUserMetadataRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\tigris\core\Models\Operations\ManagementGetUserMetadataResponse](../../models/operations/ManagementGetUserMetadataResponse.md)**


## insertMetadata

insertUserMetadata inserts the user metadata object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\ManagementInsertUserMetadataRequest;
use \tigris\core\Models\Shared\InsertUserMetadataRequest;
use \tigris\core\Models\Shared\InsertUserMetadataRequestValue;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementInsertUserMetadataRequest();
    $request->insertUserMetadataRequest = new InsertUserMetadataRequest();
    $request->insertUserMetadataRequest->metadataKey = 'hic';
    $request->insertUserMetadataRequest->value = new InsertUserMetadataRequestValue();
    $request->metadataKey = 'voluptatem';

    $response = $sdk->user->insertMetadata($request);

    if ($response->insertUserMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\tigris\core\Models\Operations\ManagementInsertUserMetadataRequest](../../models/operations/ManagementInsertUserMetadataRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\tigris\core\Models\Operations\ManagementInsertUserMetadataResponse](../../models/operations/ManagementInsertUserMetadataResponse.md)**


## updateMetadata

updateUserMetadata updates the user metadata object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\ManagementUpdateUserMetadataRequest;
use \tigris\core\Models\Shared\UpdateUserMetadataRequest;
use \tigris\core\Models\Shared\UpdateUserMetadataRequestValue;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementUpdateUserMetadataRequest();
    $request->updateUserMetadataRequest = new UpdateUserMetadataRequest();
    $request->updateUserMetadataRequest->metadataKey = 'cumque';
    $request->updateUserMetadataRequest->value = new UpdateUserMetadataRequestValue();
    $request->metadataKey = 'soluta';

    $response = $sdk->user->updateMetadata($request);

    if ($response->updateUserMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\tigris\core\Models\Operations\ManagementUpdateUserMetadataRequest](../../models/operations/ManagementUpdateUserMetadataRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\tigris\core\Models\Operations\ManagementUpdateUserMetadataResponse](../../models/operations/ManagementUpdateUserMetadataResponse.md)**

