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

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementGetUserMetadataRequest();
    $request->getUserMetadataRequest = new GetUserMetadataRequest();
    $request->getUserMetadataRequest->metadataKey = 'esse';
    $request->getUserMetadataRequest->value = [
        'accusamus' => 'veritatis',
        'esse' => 'quod',
        'nam' => 'vero',
        'aliquid' => 'quasi',
    ];
    $request->metadataKey = 'saepe';

    $response = $sdk->user->getMetadata($request);

    if ($response->getUserMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementInsertUserMetadataRequest();
    $request->insertUserMetadataRequest = new InsertUserMetadataRequest();
    $request->insertUserMetadataRequest->metadataKey = 'vel';
    $request->insertUserMetadataRequest->value = [
        'molestiae' => 'rerum',
        'occaecati' => 'minima',
        'distinctio' => 'eligendi',
    ];
    $request->metadataKey = 'sit';

    $response = $sdk->user->insertMetadata($request);

    if ($response->insertUserMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new ManagementUpdateUserMetadataRequest();
    $request->updateUserMetadataRequest = new UpdateUserMetadataRequest();
    $request->updateUserMetadataRequest->metadataKey = 'culpa';
    $request->updateUserMetadataRequest->value = [
        'adipisci' => 'cumque',
        'consequuntur' => 'consequatur',
        'minus' => 'quaerat',
    ];
    $request->metadataKey = 'sapiente';

    $response = $sdk->user->updateMetadata($request);

    if ($response->updateUserMetadataResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
