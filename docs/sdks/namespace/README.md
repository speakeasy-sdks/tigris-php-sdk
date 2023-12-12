# NamespaceT


## Overview

The Management section provide APIs that can be used to manage users, and app_keys.

### Available Operations

* [create](#create) - Creates a Namespace
* [get](#get) - Describe the details of all namespaces
* [getMetadata](#getmetadata) - Reads the Namespace Metadata
* [insertMetadata](#insertmetadata) - Inserts Namespace Metadata
* [list](#list) - Lists all Namespaces
* [updateMetadata](#updatemetadata) - Updates Namespace Metadata

## create

Creates a new namespace, if it does not exist

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateNamespaceRequest();
    $request->code = 481196;
    $request->id = '<ID>';
    $request->name = 'string';;

    $response = $sdk->namespace->create($request);

    if ($response->createNamespaceResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\tigris\core\Models\Shared\CreateNamespaceRequest](../../Models/Shared/CreateNamespaceRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\tigris\core\Models\Operations\CreateNamespaceResponse](../../Models/Operations/CreateNamespaceResponse.md)**


## get

Get details for all namespaces

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->namespace->get();

    if ($response->describeNamespacesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\tigris\core\Models\Operations\ManagementDescribeNamespacesResponse](../../Models/Operations/ManagementDescribeNamespacesResponse.md)**


## getMetadata

GetNamespaceMetadata inserts the user metadata object

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
        $request = new Operations\ManagementGetNamespaceMetadataRequest();
    $request->getNamespaceMetadataRequest = new Shared\GetNamespaceMetadataRequest();
    $request->getNamespaceMetadataRequest->metadataKey = 'string';
    $request->getNamespaceMetadataRequest->value = new Shared\Value();
    $request->metadataKey = 'string';;

    $response = $sdk->namespace->getMetadata($request);

    if ($response->getNamespaceMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [\tigris\core\Models\Operations\ManagementGetNamespaceMetadataRequest](../../Models/Operations/ManagementGetNamespaceMetadataRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |


### Response

**[?\tigris\core\Models\Operations\ManagementGetNamespaceMetadataResponse](../../Models/Operations/ManagementGetNamespaceMetadataResponse.md)**


## insertMetadata

InsertNamespaceMetadata inserts the namespace metadata object

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
        $request = new Operations\ManagementInsertNamespaceMetadataRequest();
    $request->insertNamespaceMetadataRequest = new Shared\InsertNamespaceMetadataRequest();
    $request->insertNamespaceMetadataRequest->metadataKey = 'string';
    $request->insertNamespaceMetadataRequest->value = new Shared\InsertNamespaceMetadataRequestValue();
    $request->metadataKey = 'string';;

    $response = $sdk->namespace->insertMetadata($request);

    if ($response->insertNamespaceMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                      | Type                                                                                                                                           | Required                                                                                                                                       | Description                                                                                                                                    |
| ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                     | [\tigris\core\Models\Operations\ManagementInsertNamespaceMetadataRequest](../../Models/Operations/ManagementInsertNamespaceMetadataRequest.md) | :heavy_check_mark:                                                                                                                             | The request object to use for the request.                                                                                                     |


### Response

**[?\tigris\core\Models\Operations\ManagementInsertNamespaceMetadataResponse](../../Models/Operations/ManagementInsertNamespaceMetadataResponse.md)**


## list

List all namespace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->namespace->list();

    if ($response->listNamespacesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\tigris\core\Models\Operations\ManagementListNamespacesResponse](../../Models/Operations/ManagementListNamespacesResponse.md)**


## updateMetadata

UpdateNamespaceMetadata updates the user metadata object

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
        $request = new Operations\ManagementUpdateNamespaceMetadataRequest();
    $request->updateNamespaceMetadataRequest = new Shared\UpdateNamespaceMetadataRequest();
    $request->updateNamespaceMetadataRequest->metadataKey = 'string';
    $request->updateNamespaceMetadataRequest->value = new Shared\UpdateNamespaceMetadataRequestValue();
    $request->metadataKey = 'string';;

    $response = $sdk->namespace->updateMetadata($request);

    if ($response->updateNamespaceMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                      | Type                                                                                                                                           | Required                                                                                                                                       | Description                                                                                                                                    |
| ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                     | [\tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataRequest](../../Models/Operations/ManagementUpdateNamespaceMetadataRequest.md) | :heavy_check_mark:                                                                                                                             | The request object to use for the request.                                                                                                     |


### Response

**[?\tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataResponse](../../Models/Operations/ManagementUpdateNamespaceMetadataResponse.md)**

