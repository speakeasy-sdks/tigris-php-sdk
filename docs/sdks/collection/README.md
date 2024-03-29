# Collection


## Overview

The Collections section provide APIs that can be used to manage collections. A collection can have one or more documents.

### Available Operations

* [create](#create) - Create or update a collection
* [deleteDocuments](#deletedocuments) - Delete Documents
* [describe](#describe) - Describe Collection
* [drop](#drop) - Drop Collection
* [importDocuments](#importdocuments) - Import Documents
* [insertDocuments](#insertdocuments) - Insert Documents
* [readDocuments](#readdocuments) - Read Documents
* [replaceDocuments](#replacedocuments) - Insert or Replace Documents
* [searchDocuments](#searchdocuments) - Search Documents.
* [updateDocuments](#updatedocuments) - Update Documents.

## create

Creates a new collection or atomically upgrades the collection to the new schema provided in the request.
 Schema changes are applied atomically and immediately without any downtime.
 Tigris Offers two types of collections: <p></p>
    <li> `DOCUMENTS`: Offers rich CRUD APIs.
    <li> `MESSAGES`: Offers event streaming APIs.

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
        $request = new Operations\TigrisCreateOrUpdateCollectionRequest();
    $request->createOrUpdateCollectionRequest = new Shared\CreateOrUpdateCollectionRequest();
    $request->createOrUpdateCollectionRequest->branch = '<value>';
    $request->createOrUpdateCollectionRequest->onlyCreate = false;
    $request->createOrUpdateCollectionRequest->options = new Shared\CollectionOptions();
    $request->createOrUpdateCollectionRequest->schema = new Shared\CreateOrUpdateCollectionRequestSchema();
    $request->collection = '<value>';
    $request->project = '<value>';;

    $response = $sdk->collection->create($request);

    if ($response->createOrUpdateCollectionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [\tigris\core\Models\Operations\TigrisCreateOrUpdateCollectionRequest](../../Models/Operations/TigrisCreateOrUpdateCollectionRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |


### Response

**[?\tigris\core\Models\Operations\TigrisCreateOrUpdateCollectionResponse](../../Models/Operations/TigrisCreateOrUpdateCollectionResponse.md)**


## deleteDocuments

Delete a range of documents in the collection using the condition provided in the filter.

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
        $request = new Operations\TigrisDeleteRequest();
    $request->deleteRequest = new Shared\DeleteRequest();
    $request->deleteRequest->branch = '<value>';
    $request->deleteRequest->filter = new Shared\Filter();
    $request->deleteRequest->options = new Shared\DeleteRequestOptions();
    $request->deleteRequest->options->collation = new Shared\Collation();
    $request->deleteRequest->options->collation->case = '<value>';
    $request->deleteRequest->options->limit = 968874;
    $request->deleteRequest->options->writeOptions = new Shared\WriteOptions();
    $request->collection = '<value>';
    $request->project = '<value>';;

    $response = $sdk->collection->deleteDocuments($request);

    if ($response->deleteResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\TigrisDeleteRequest](../../Models/Operations/TigrisDeleteRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisDeleteResponse](../../Models/Operations/TigrisDeleteResponse.md)**


## describe

Returns the information related to the collection. This can be used to retrieve the schema or size of the collection.

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
        $request = new Operations\TigrisDescribeCollectionRequest();
    $request->describeCollectionRequest = new Shared\DescribeCollectionRequest();
    $request->describeCollectionRequest->branch = '<value>';
    $request->describeCollectionRequest->collection = '<value>';
    $request->describeCollectionRequest->options = new Shared\CollectionOptions();
    $request->describeCollectionRequest->project = '<value>';
    $request->describeCollectionRequest->schemaFormat = '<value>';
    $request->collection = '<value>';
    $request->project = '<value>';;

    $response = $sdk->collection->describe($request);

    if ($response->describeCollectionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\tigris\core\Models\Operations\TigrisDescribeCollectionRequest](../../Models/Operations/TigrisDescribeCollectionRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\tigris\core\Models\Operations\TigrisDescribeCollectionResponse](../../Models/Operations/TigrisDescribeCollectionResponse.md)**


## drop

Drops the collection inside this project. This API deletes all of the
 documents inside this collection and any metadata associated with it.

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
        $request = new Operations\TigrisDropCollectionRequest();
    $request->dropCollectionRequest = new Shared\DropCollectionRequest();
    $request->dropCollectionRequest->branch = '<value>';
    $request->dropCollectionRequest->options = new Shared\CollectionOptions();
    $request->collection = '<value>';
    $request->project = '<value>';;

    $response = $sdk->collection->drop($request);

    if ($response->dropCollectionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\tigris\core\Models\Operations\TigrisDropCollectionRequest](../../Models/Operations/TigrisDropCollectionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisDropCollectionResponse](../../Models/Operations/TigrisDropCollectionResponse.md)**


## importDocuments

Imports documents into the collection.

 It automatically:
  * Detects the schema of the documents in the batch
  * Evolves the schema as soon as it's backward compatible
  * Creates collection with inferred schema (if requested)

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
        $request = new Operations\TigrisImportRequest();
    $request->importRequest = new Shared\ImportRequest();
    $request->importRequest->autogenerated = [
        '<value>',
    ];
    $request->importRequest->branch = '<value>';
    $request->importRequest->createCollection = false;
    $request->importRequest->documents = [
        new Shared\Documents(),
    ];
    $request->importRequest->options = new Shared\ImportRequestOptions();
    $request->importRequest->options->writeOptions = new Shared\WriteOptions();
    $request->importRequest->primaryKey = [
        '<value>',
    ];
    $request->collection = '<value>';
    $request->project = '<value>';;

    $response = $sdk->collection->importDocuments($request);

    if ($response->importResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\TigrisImportRequest](../../Models/Operations/TigrisImportRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisImportResponse](../../Models/Operations/TigrisImportResponse.md)**


## insertDocuments

Inserts new documents in the collection and returns an AlreadyExists error if any of the documents
 in the request already exists. Insert provides idempotency by returning an error if the document
 already exists. To replace documents, use REPLACE API instead of INSERT.

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
        $request = new Operations\TigrisInsertRequest();
    $request->insertRequest = new Shared\InsertRequest();
    $request->insertRequest->branch = '<value>';
    $request->insertRequest->documents = [
        new Shared\InsertRequestDocuments(),
    ];
    $request->insertRequest->options = new Shared\InsertRequestOptions();
    $request->insertRequest->options->writeOptions = new Shared\WriteOptions();
    $request->collection = '<value>';
    $request->project = '<value>';;

    $response = $sdk->collection->insertDocuments($request);

    if ($response->insertResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\TigrisInsertRequest](../../Models/Operations/TigrisInsertRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisInsertResponse](../../Models/Operations/TigrisInsertResponse.md)**


## readDocuments

Reads a range of documents from the collection, or messages from a collection in case of event streaming. Tigris does not require you to
 index any fields and automatically index all the fields which means you can filter by any field in the document.
 An empty filter will trigger reading all the documents inside this collection. The API supports pagination that
 can be used by passing `Limit/Skip` parameters. The `skip` parameter skips the number of documents from the start and
 the `limit` parameter is used to specify the number of documents to read. You can find more detailed documentation
 of the Read API <a href="https://docs.tigrisdata.com/overview/query" title="here">here</a>.

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
        $request = new Operations\TigrisReadRequest();
    $request->readRequest = new Shared\ReadRequest();
    $request->readRequest->branch = '<value>';
    $request->readRequest->fields = new Shared\Fields();
    $request->readRequest->filter = new Shared\ReadRequestFilter();
    $request->readRequest->options = new Shared\ReadRequestOptions();
    $request->readRequest->options->collation = new Shared\Collation();
    $request->readRequest->options->collation->case = '<value>';
    $request->readRequest->options->limit = 649883;
    $request->readRequest->options->offset = '<value>';
    $request->readRequest->options->skip = 11274;
    $request->readRequest->sort = '<value>';
    $request->collection = '<value>';
    $request->project = '<value>';;

    $response = $sdk->collection->readDocuments($request);

    if ($response->streamingReadResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\tigris\core\Models\Operations\TigrisReadRequest](../../Models/Operations/TigrisReadRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisReadResponse](../../Models/Operations/TigrisReadResponse.md)**


## replaceDocuments

Inserts the documents or replaces the existing documents in the collections.

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
        $request = new Operations\TigrisReplaceRequest();
    $request->replaceRequest = new Shared\ReplaceRequest();
    $request->replaceRequest->branch = '<value>';
    $request->replaceRequest->documents = [
        new Shared\ReplaceRequestDocuments(),
    ];
    $request->replaceRequest->options = new Shared\ReplaceRequestOptions();
    $request->replaceRequest->options->writeOptions = new Shared\WriteOptions();
    $request->collection = '<value>';
    $request->project = '<value>';;

    $response = $sdk->collection->replaceDocuments($request);

    if ($response->replaceResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\tigris\core\Models\Operations\TigrisReplaceRequest](../../Models/Operations/TigrisReplaceRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\tigris\core\Models\Operations\TigrisReplaceResponse](../../Models/Operations/TigrisReplaceResponse.md)**


## searchDocuments

Searches a collection for the documents matching the query, or messages in case of event streaming. A search can be
 a term search or a phrase search. Search API allows filtering the result set using filters as documented <a href="https://docs.tigrisdata.com/overview/query#specification-1" title="here">here</a>.
 You can also perform a faceted search by passing the fields in the facet parameter.
 You can find more detailed documentation of the Search API with multiple examples <a href="https://docs.tigrisdata.com/overview/search" title="here">here</a>.

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
        $request = new Operations\TigrisSearchRequest();
    $request->searchRequest = new Shared\SearchRequest();
    $request->searchRequest->branch = '<value>';
    $request->searchRequest->collation = new Shared\Collation();
    $request->searchRequest->collation->case = '<value>';
    $request->searchRequest->excludeFields = [
        '<value>',
    ];
    $request->searchRequest->facet = new Shared\Facet();
    $request->searchRequest->fields = new Shared\SearchRequestFields();
    $request->searchRequest->filter = new Shared\SearchRequestFilter();
    $request->searchRequest->includeFields = [
        '<value>',
    ];
    $request->searchRequest->page = 124504;
    $request->searchRequest->pageSize = 87653;
    $request->searchRequest->q = '<value>';
    $request->searchRequest->searchFields = [
        '<value>',
    ];
    $request->searchRequest->sort = new Shared\Sort();
    $request->collection = '<value>';
    $request->project = '<value>';;

    $response = $sdk->collection->searchDocuments($request);

    if ($response->streamingSearchResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\TigrisSearchRequest](../../Models/Operations/TigrisSearchRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisSearchResponse](../../Models/Operations/TigrisSearchResponse.md)**


## updateDocuments

Update a range of documents in the collection using the condition provided in the filter.

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
        $request = new Operations\TigrisUpdateRequest();
    $request->updateRequest = new Shared\UpdateRequest();
    $request->updateRequest->branch = '<value>';
    $request->updateRequest->fields = new Shared\UpdateRequestFields();
    $request->updateRequest->filter = new Shared\UpdateRequestFilter();
    $request->updateRequest->options = new Shared\UpdateRequestOptions();
    $request->updateRequest->options->collation = new Shared\Collation();
    $request->updateRequest->options->collation->case = '<value>';
    $request->updateRequest->options->limit = 286496;
    $request->updateRequest->options->writeOptions = new Shared\WriteOptions();
    $request->collection = '<value>';
    $request->project = '<value>';;

    $response = $sdk->collection->updateDocuments($request);

    if ($response->updateResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\TigrisUpdateRequest](../../Models/Operations/TigrisUpdateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisUpdateResponse](../../Models/Operations/TigrisUpdateResponse.md)**

