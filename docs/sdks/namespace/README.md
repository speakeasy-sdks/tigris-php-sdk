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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Shared\CreateNamespaceRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CreateNamespaceRequest();
    $request->code = 551816;
    $request->id = '90afa563-e251-46fe-8c8b-711e5b7fd2ed';
    $request->name = 'Kathryn Lang';

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
| `$request`                                                                                         | [\tigris\core\Models\Shared\CreateNamespaceRequest](../../models/shared/CreateNamespaceRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?\tigris\core\Models\Operations\CreateNamespaceResponse](../../models/operations/CreateNamespaceResponse.md)**


## get

Get details for all namespaces

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

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

**[?\tigris\core\Models\Operations\ManagementDescribeNamespacesResponse](../../models/operations/ManagementDescribeNamespacesResponse.md)**


## getMetadata

GetNamespaceMetadata inserts the user metadata object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\ManagementGetNamespaceMetadataRequest;
use \tigris\core\Models\Shared\GetNamespaceMetadataRequest;
use \tigris\core\Models\Shared\GetNamespaceMetadataRequestValue;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementGetNamespaceMetadataRequest();
    $request->getNamespaceMetadataRequest = new GetNamespaceMetadataRequest();
    $request->getNamespaceMetadataRequest->metadataKey = 'sunt';
    $request->getNamespaceMetadataRequest->value = new GetNamespaceMetadataRequestValue();
    $request->metadataKey = 'quo';

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
| `$request`                                                                                                                               | [\tigris\core\Models\Operations\ManagementGetNamespaceMetadataRequest](../../models/operations/ManagementGetNamespaceMetadataRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |


### Response

**[?\tigris\core\Models\Operations\ManagementGetNamespaceMetadataResponse](../../models/operations/ManagementGetNamespaceMetadataResponse.md)**


## insertMetadata

InsertNamespaceMetadata inserts the namespace metadata object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\ManagementInsertNamespaceMetadataRequest;
use \tigris\core\Models\Shared\InsertNamespaceMetadataRequest;
use \tigris\core\Models\Shared\InsertNamespaceMetadataRequestValue;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementInsertNamespaceMetadataRequest();
    $request->insertNamespaceMetadataRequest = new InsertNamespaceMetadataRequest();
    $request->insertNamespaceMetadataRequest->metadataKey = 'illum';
    $request->insertNamespaceMetadataRequest->value = new InsertNamespaceMetadataRequestValue();
    $request->metadataKey = 'pariatur';

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
| `$request`                                                                                                                                     | [\tigris\core\Models\Operations\ManagementInsertNamespaceMetadataRequest](../../models/operations/ManagementInsertNamespaceMetadataRequest.md) | :heavy_check_mark:                                                                                                                             | The request object to use for the request.                                                                                                     |


### Response

**[?\tigris\core\Models\Operations\ManagementInsertNamespaceMetadataResponse](../../models/operations/ManagementInsertNamespaceMetadataResponse.md)**


## list

List all namespace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

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

**[?\tigris\core\Models\Operations\ManagementListNamespacesResponse](../../models/operations/ManagementListNamespacesResponse.md)**


## updateMetadata

UpdateNamespaceMetadata updates the user metadata object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataRequest;
use \tigris\core\Models\Shared\UpdateNamespaceMetadataRequest;
use \tigris\core\Models\Shared\UpdateNamespaceMetadataRequestValue;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementUpdateNamespaceMetadataRequest();
    $request->updateNamespaceMetadataRequest = new UpdateNamespaceMetadataRequest();
    $request->updateNamespaceMetadataRequest->metadataKey = 'maxime';
    $request->updateNamespaceMetadataRequest->value = new UpdateNamespaceMetadataRequestValue();
    $request->metadataKey = 'ea';

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
| `$request`                                                                                                                                     | [\tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataRequest](../../models/operations/ManagementUpdateNamespaceMetadataRequest.md) | :heavy_check_mark:                                                                                                                             | The request object to use for the request.                                                                                                     |


### Response

**[?\tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataResponse](../../models/operations/ManagementUpdateNamespaceMetadataResponse.md)**

