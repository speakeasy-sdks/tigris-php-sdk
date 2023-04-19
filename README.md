# tigris-data/tigris-api

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/tigris-php-sdk.git"
        }
    ],
    "require": {
        "tigris-data/tigris-api": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
```php
<?php

declare(strict_types=1);

use tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = 'corrupti';
    $request->project = 'provident';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);

use tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
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
``````php
<?php

declare(strict_types=1);

use tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
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
``````php
<?php

declare(strict_types=1);

use tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
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
```<!-- Start SDK Example Usage -->

<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## SDK Available Operations


### appKey

* `delete` - Deletes the app key
* `list` - List all the app keys
* `rotate` - Rotates the app key secret
* `tigrisCreateAppKey` - Creates the app key
* `update` - Updates the description of the app key

### auth

* `get` - Access Token

### cache

* `create` - Creates the cache
* `delete` - Deletes the cache
* `deleteKeys` - Deletes an entry from cache
* `getKey` - Reads an entry from cache
* `getSetKey` - Sets an entry in the cache and returns the previous value if exists
* `list` - Lists all the caches for the given project
* `listKeys` - Lists all the key for this cache
* `setKey` - Sets an entry in the cache

### channel

* `get` - Get the details about a channel
* `getMessages` - Get all messages for a channel
* `list` - Get all channels for your application project
* `listSubscriptions` - Get the subscriptions details about a channel
* `pushMessages` - push messages to a single channel
* `realtimePresence` - Presence about the channel

### collection

* `create` - Create or update a collection
* `deleteDocuments` - Delete Documents
* `describe` - Describe Collection
* `drop` - Drop Collection
* `importDocuments` - Import Documents
* `insertDocuments` - Insert Documents
* `readDocuments` - Read Documents
* `replaceDocuments` - Insert or Replace Documents
* `searchDocuments` - Search Documents.
* `updateDocuments` - Update Documents.

### database

* `beginTransaction` - Begin a transaction
* `commitTransaction` - Commit a Transaction
* `createBranch` - Create a database branch
* `deleteBranch` - Delete a database branch
* `describe` - Describe database
* `listCollections` - List Collections
* `rollbackTransaction` - Rollback a transaction
* `tigrisListBranches` - List database branches

### namespace

* `create` - Creates a Namespace
* `get` - Describe the details of all namespaces
* `getMetadata` - Reads the Namespace Metadata
* `insertMetadata` - Inserts Namespace Metadata
* `list` - Lists all Namespaces
* `updateMetadata` - Updates Namespace Metadata

### project

* `create` - Create Project
* `deleteProject` - Delete Project and all resources under project
* `list` - List Projects

### search

* `createDocument` - Create a single document
* `createDocuments` - Create multiple documents
* `deleteDocuments` - Delete documents by ids
* `deleteIndex` - Deletes search index
* `findDocuments` - Search Documents.
* `getDocuments` - Get a single or multiple documents
* `getIndex` - Get information about a search index
* `listIndexes` - List search indexes
* `queryDeleteDocuments` - Delete documents by query
* `replaceDocuments` - Create or replace documents in an index
* `updateDocuments` - Update documents in an index
* `updateIndex` - Creates or updates search index

### system

* `getHealth` - Health Check
* `getServerInfo` - Information about the server
* `observabilityQuotaUsage` - Queries current namespace quota usage
* `queryQuotaLimits` - Queries current namespace quota limits
* `queryTimeSeriesMetrics` - Queries time series metrics

### user

* `getMetadata` - Reads the User Metadata
* `insertMetadata` - Inserts User Metadata
* `updateMetadata` - Updates User Metadata
<!-- End SDK Available Operations -->

### SDK Generated by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
