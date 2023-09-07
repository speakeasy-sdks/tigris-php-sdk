# database

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
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisBeginTransactionRequest;
use \tigris\core\Models\Shared\BeginTransactionRequest;
use \tigris\core\Models\Shared\TransactionOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisBeginTransactionRequest();
    $request->beginTransactionRequest = new BeginTransactionRequest();
    $request->beginTransactionRequest->branch = 'deserunt';
    $request->beginTransactionRequest->options = new TransactionOptions();
    $request->project = 'nisi';

    $response = $sdk->database->beginTransaction($request);

    if ($response->beginTransactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\tigris\core\Models\Operations\TigrisBeginTransactionRequest](../../models/operations/TigrisBeginTransactionRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\tigris\core\Models\Operations\TigrisBeginTransactionResponse](../../models/operations/TigrisBeginTransactionResponse.md)**


## commitTransaction

Atomically commit all the changes performed in the context of the transaction. Commit provides all
 or nothing semantics by ensuring no partial updates are in the project due to a transaction failure.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisCommitTransactionRequest;
use \tigris\core\Models\Shared\CommitTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisCommitTransactionRequest();
    $request->commitTransactionRequest = new CommitTransactionRequest();
    $request->commitTransactionRequest->branch = 'vel';
    $request->project = 'natus';

    $response = $sdk->database->commitTransaction($request);

    if ($response->commitTransactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\tigris\core\Models\Operations\TigrisCommitTransactionRequest](../../models/operations/TigrisCommitTransactionRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |


### Response

**[?\tigris\core\Models\Operations\TigrisCommitTransactionResponse](../../models/operations/TigrisCommitTransactionResponse.md)**


## createBranch

Creates a new database branch, if not already existing.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisCreateBranchRequest;
use \tigris\core\Models\Shared\CreateBranchRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisCreateBranchRequest();
    $request->createBranchRequest = new CreateBranchRequest();
    $request->branch = 'omnis';
    $request->project = 'molestiae';

    $response = $sdk->database->createBranch($request);

    if ($response->createBranchResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Operations\TigrisCreateBranchRequest](../../models/operations/TigrisCreateBranchRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisCreateBranchResponse](../../models/operations/TigrisCreateBranchResponse.md)**


## deleteBranch

Deletes a database branch, if exists.
 Throws 400 Bad Request if "main" branch is being deleted

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteBranchRequest;
use \tigris\core\Models\Shared\DeleteBranchRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDeleteBranchRequest();
    $request->deleteBranchRequest = new DeleteBranchRequest();
    $request->branch = 'perferendis';
    $request->project = 'nihil';

    $response = $sdk->database->deleteBranch($request);

    if ($response->deleteBranchResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Operations\TigrisDeleteBranchRequest](../../models/operations/TigrisDeleteBranchRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisDeleteBranchResponse](../../models/operations/TigrisDeleteBranchResponse.md)**


## describe

This API returns information related to the project along with all the collections inside the project.
 This can be used to retrieve the size of the project or to retrieve schemas, branches and the size of all the collections present in this project.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDescribeDatabaseRequest;
use \tigris\core\Models\Shared\DescribeDatabaseRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDescribeDatabaseRequest();
    $request->describeDatabaseRequest = new DescribeDatabaseRequest();
    $request->describeDatabaseRequest->branch = 'magnam';
    $request->describeDatabaseRequest->project = 'distinctio';
    $request->describeDatabaseRequest->schemaFormat = 'id';
    $request->project = 'labore';

    $response = $sdk->database->describe($request);

    if ($response->describeDatabaseResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\tigris\core\Models\Operations\TigrisDescribeDatabaseRequest](../../models/operations/TigrisDescribeDatabaseRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |


### Response

**[?\tigris\core\Models\Operations\TigrisDescribeDatabaseResponse](../../models/operations/TigrisDescribeDatabaseResponse.md)**


## listCollections

List all the collections present in the project passed in the request.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisListCollectionsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisListCollectionsRequest();
    $request->branch = 'labore';
    $request->project = 'suscipit';

    $response = $sdk->database->listCollections($request);

    if ($response->listCollectionsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\tigris\core\Models\Operations\TigrisListCollectionsRequest](../../models/operations/TigrisListCollectionsRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\tigris\core\Models\Operations\TigrisListCollectionsResponse](../../models/operations/TigrisListCollectionsResponse.md)**


## rollbackTransaction

Rollback transaction discards all the changes
 performed in the transaction

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisRollbackTransactionRequest;
use \tigris\core\Models\Shared\RollbackTransactionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisRollbackTransactionRequest();
    $request->rollbackTransactionRequest = new RollbackTransactionRequest();
    $request->rollbackTransactionRequest->branch = 'natus';
    $request->project = 'nobis';

    $response = $sdk->database->rollbackTransaction($request);

    if ($response->rollbackTransactionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\tigris\core\Models\Operations\TigrisRollbackTransactionRequest](../../models/operations/TigrisRollbackTransactionRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\tigris\core\Models\Operations\TigrisRollbackTransactionResponse](../../models/operations/TigrisRollbackTransactionResponse.md)**


## tigrisListBranches

List database branches

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisListBranchesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisListBranchesRequest();
    $request->project = 'eum';

    $response = $sdk->database->tigrisListBranches($request);

    if ($response->listBranchesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\tigris\core\Models\Operations\TigrisListBranchesRequest](../../models/operations/TigrisListBranchesRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisListBranchesResponse](../../models/operations/TigrisListBranchesResponse.md)**

