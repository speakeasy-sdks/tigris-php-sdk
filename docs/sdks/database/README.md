# Database


## Overview

The Database section provide APIs that can be used to interact with the database. A single Database can have one or more collections. A database is created automatically for you when you create a project.

### Available Operations

* [beginTransaction](#begintransaction) - Begin a transaction
* [commitTransaction](#committransaction) - Commit a Transaction
* [createBranch](#createbranch) - Create a database branch
* [deleteBranch](#deletebranch) - Delete a database branch
* [describe](#describe) - Describe database
* [listCollections](#listcollections) - List Collections
* [rollbackTransaction](#rollbacktransaction) - Rollback a transaction
* [tigrisListBranches](#tigrislistbranches) - List database branches

## beginTransaction

Starts a new transaction and returns a transactional object. All reads/writes performed
 within a transaction will run with serializable isolation. Tigris offers global transactions,
 with ACID properties and strict serializability.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TigrisBeginTransactionRequest();
    $request->beginTransactionRequest = new Shared\BeginTransactionRequest();
    $request->beginTransactionRequest->branch = '<value>';
    $request->beginTransactionRequest->options = new Shared\TransactionOptions();
    $request->project = '<value>';;

    $response = $sdk->database->beginTransaction($request);

    if ($response->beginTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\tigris\core\Models\Operations\TigrisBeginTransactionRequest](../../Models/Operations/TigrisBeginTransactionRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\tigris\core\Models\Operations\TigrisBeginTransactionResponse](../../Models/Operations/TigrisBeginTransactionResponse.md)**


## commitTransaction

Atomically commit all the changes performed in the context of the transaction. Commit provides all
 or nothing semantics by ensuring no partial updates are in the project due to a transaction failure.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TigrisCommitTransactionRequest();
    $request->commitTransactionRequest = new Shared\CommitTransactionRequest();
    $request->commitTransactionRequest->branch = '<value>';
    $request->project = '<value>';;

    $response = $sdk->database->commitTransaction($request);

    if ($response->commitTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\tigris\core\Models\Operations\TigrisCommitTransactionRequest](../../Models/Operations/TigrisCommitTransactionRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\tigris\core\Models\Operations\TigrisCommitTransactionResponse](../../Models/Operations/TigrisCommitTransactionResponse.md)**


## createBranch

Creates a new database branch, if not already existing.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TigrisCreateBranchRequest();
    $request->createBranchRequest = new Shared\CreateBranchRequest();
    $request->branch = '<value>';
    $request->project = '<value>';;

    $response = $sdk->database->createBranch($request);

    if ($response->createBranchResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Operations\TigrisCreateBranchRequest](../../Models/Operations/TigrisCreateBranchRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisCreateBranchResponse](../../Models/Operations/TigrisCreateBranchResponse.md)**


## deleteBranch

Deletes a database branch, if exists.
 Throws 400 Bad Request if "main" branch is being deleted

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TigrisDeleteBranchRequest();
    $request->deleteBranchRequest = new Shared\DeleteBranchRequest();
    $request->branch = '<value>';
    $request->project = '<value>';;

    $response = $sdk->database->deleteBranch($request);

    if ($response->deleteBranchResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Operations\TigrisDeleteBranchRequest](../../Models/Operations/TigrisDeleteBranchRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisDeleteBranchResponse](../../Models/Operations/TigrisDeleteBranchResponse.md)**


## describe

This API returns information related to the project along with all the collections inside the project.
 This can be used to retrieve the size of the project or to retrieve schemas, branches and the size of all the collections present in this project.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TigrisDescribeDatabaseRequest();
    $request->describeDatabaseRequest = new Shared\DescribeDatabaseRequest();
    $request->describeDatabaseRequest->branch = '<value>';
    $request->describeDatabaseRequest->project = '<value>';
    $request->describeDatabaseRequest->schemaFormat = '<value>';
    $request->project = '<value>';;

    $response = $sdk->database->describe($request);

    if ($response->describeDatabaseResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\tigris\core\Models\Operations\TigrisDescribeDatabaseRequest](../../Models/Operations/TigrisDescribeDatabaseRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\tigris\core\Models\Operations\TigrisDescribeDatabaseResponse](../../Models/Operations/TigrisDescribeDatabaseResponse.md)**


## listCollections

List all the collections present in the project passed in the request.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TigrisListCollectionsRequest();
    $request->branch = '<value>';
    $request->project = '<value>';;

    $response = $sdk->database->listCollections($request);

    if ($response->listCollectionsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\tigris\core\Models\Operations\TigrisListCollectionsRequest](../../Models/Operations/TigrisListCollectionsRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\tigris\core\Models\Operations\TigrisListCollectionsResponse](../../Models/Operations/TigrisListCollectionsResponse.md)**


## rollbackTransaction

Rollback transaction discards all the changes
 performed in the transaction

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TigrisRollbackTransactionRequest();
    $request->rollbackTransactionRequest = new Shared\RollbackTransactionRequest();
    $request->rollbackTransactionRequest->branch = '<value>';
    $request->project = '<value>';;

    $response = $sdk->database->rollbackTransaction($request);

    if ($response->rollbackTransactionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\tigris\core\Models\Operations\TigrisRollbackTransactionRequest](../../Models/Operations/TigrisRollbackTransactionRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\tigris\core\Models\Operations\TigrisRollbackTransactionResponse](../../Models/Operations/TigrisRollbackTransactionResponse.md)**


## tigrisListBranches

List database branches

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TigrisListBranchesRequest();
    $request->project = '<value>';;

    $response = $sdk->database->tigrisListBranches($request);

    if ($response->listBranchesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Operations\TigrisListBranchesRequest](../../Models/Operations/TigrisListBranchesRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisListBranchesResponse](../../Models/Operations/TigrisListBranchesResponse.md)**

