# namespace

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
    $request->code = 253941;
    $request->id = '53f870b3-26b5-4a73-829c-db1a8422bb67';
    $request->name = 'Marty Deckow';

    $response = $sdk->namespace->create($request);

    if ($response->createNamespaceResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementGetNamespaceMetadataRequest();
    $request->getNamespaceMetadataRequest = new GetNamespaceMetadataRequest();
    $request->getNamespaceMetadataRequest->metadataKey = 'magni';
    $request->getNamespaceMetadataRequest->value = [
        'sunt' => 'ullam',
        'nam' => 'hic',
    ];
    $request->metadataKey = 'voluptatem';

    $response = $sdk->namespace->getMetadata($request);

    if ($response->getNamespaceMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementInsertNamespaceMetadataRequest();
    $request->insertNamespaceMetadataRequest = new InsertNamespaceMetadataRequest();
    $request->insertNamespaceMetadataRequest->metadataKey = 'cumque';
    $request->insertNamespaceMetadataRequest->value = [
        'nobis' => 'et',
        'saepe' => 'ipsum',
        'veritatis' => 'nobis',
    ];
    $request->metadataKey = 'quos';

    $response = $sdk->namespace->insertMetadata($request);

    if ($response->insertNamespaceMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementUpdateNamespaceMetadataRequest();
    $request->updateNamespaceMetadataRequest = new UpdateNamespaceMetadataRequest();
    $request->updateNamespaceMetadataRequest->metadataKey = 'tempore';
    $request->updateNamespaceMetadataRequest->value = [
        'aperiam' => 'delectus',
        'dolorem' => 'dolore',
        'labore' => 'adipisci',
    ];
    $request->metadataKey = 'dolorum';

    $response = $sdk->namespace->updateMetadata($request);

    if ($response->updateNamespaceMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
