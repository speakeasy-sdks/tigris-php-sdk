# User


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

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ManagementGetUserMetadataRequest();
    $request->getUserMetadataRequest = new Shared\GetUserMetadataRequest();
    $request->getUserMetadataRequest->metadataKey = 'string';
    $request->getUserMetadataRequest->value = new Shared\GetUserMetadataRequestValue();
    $request->metadataKey = 'string';;

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
| `$request`                                                                                                                     | [\tigris\core\Models\Operations\ManagementGetUserMetadataRequest](../../Models/Operations/ManagementGetUserMetadataRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\tigris\core\Models\Operations\ManagementGetUserMetadataResponse](../../Models/Operations/ManagementGetUserMetadataResponse.md)**


## insertMetadata

insertUserMetadata inserts the user metadata object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ManagementInsertUserMetadataRequest();
    $request->insertUserMetadataRequest = new Shared\InsertUserMetadataRequest();
    $request->insertUserMetadataRequest->metadataKey = 'string';
    $request->insertUserMetadataRequest->value = new Shared\InsertUserMetadataRequestValue();
    $request->metadataKey = 'string';;

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
| `$request`                                                                                                                           | [\tigris\core\Models\Operations\ManagementInsertUserMetadataRequest](../../Models/Operations/ManagementInsertUserMetadataRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\tigris\core\Models\Operations\ManagementInsertUserMetadataResponse](../../Models/Operations/ManagementInsertUserMetadataResponse.md)**


## updateMetadata

updateUserMetadata updates the user metadata object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ManagementUpdateUserMetadataRequest();
    $request->updateUserMetadataRequest = new Shared\UpdateUserMetadataRequest();
    $request->updateUserMetadataRequest->metadataKey = 'string';
    $request->updateUserMetadataRequest->value = new Shared\UpdateUserMetadataRequestValue();
    $request->metadataKey = 'string';;

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
| `$request`                                                                                                                           | [\tigris\core\Models\Operations\ManagementUpdateUserMetadataRequest](../../Models/Operations/ManagementUpdateUserMetadataRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |


### Response

**[?\tigris\core\Models\Operations\ManagementUpdateUserMetadataResponse](../../Models/Operations/ManagementUpdateUserMetadataResponse.md)**

