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
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TigrisCreateOrUpdateCollectionRequest();
    $request->createOrUpdateCollectionRequest = new Shared\CreateOrUpdateCollectionRequest();
    $request->createOrUpdateCollectionRequest->branch = 'string';
    $request->createOrUpdateCollectionRequest->onlyCreate = false;
    $request->createOrUpdateCollectionRequest->options = new Shared\CollectionOptions();
    $request->createOrUpdateCollectionRequest->schema = new Shared\CreateOrUpdateCollectionRequestSchema();
    $request->collection = 'string';
    $request->project = 'string';

    $response = $sdk->collection->create($request);

    if ($response->createOrUpdateCollectionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [\tigris\core\Models\Operations\TigrisCreateOrUpdateCollectionRequest](../../models/operations/TigrisCreateOrUpdateCollectionRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |


### Response

**[?\tigris\core\Models\Operations\TigrisCreateOrUpdateCollectionResponse](../../models/operations/TigrisCreateOrUpdateCollectionResponse.md)**


## deleteDocuments

Delete a range of documents in the collection using the condition provided in the filter.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TigrisDeleteRequest();
    $request->deleteRequest = new Shared\DeleteRequest();
    $request->deleteRequest->branch = 'string';
    $request->deleteRequest->filter = new Shared\Filter();
    $request->deleteRequest->options = new Shared\DeleteRequestOptions();
    $request->deleteRequest->options->collation = new Shared\Collation();
    $request->deleteRequest->options->collation->case = 'string';
    $request->deleteRequest->options->limit = 968874;
    $request->deleteRequest->options->writeOptions = new Shared\WriteOptions();
    $request->collection = 'string';
    $request->project = 'string';

    $response = $sdk->collection->deleteDocuments($request);

    if ($response->deleteResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\TigrisDeleteRequest](../../models/operations/TigrisDeleteRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisDeleteResponse](../../models/operations/TigrisDeleteResponse.md)**


## describe

Returns the information related to the collection. This can be used to retrieve the schema or size of the collection.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TigrisDescribeCollectionRequest();
    $request->describeCollectionRequest = new Shared\DescribeCollectionRequest();
    $request->describeCollectionRequest->branch = 'string';
    $request->describeCollectionRequest->collection = 'string';
    $request->describeCollectionRequest->options = new Shared\CollectionOptions();
    $request->describeCollectionRequest->project = 'string';
    $request->describeCollectionRequest->schemaFormat = 'string';
    $request->collection = 'string';
    $request->project = 'string';

    $response = $sdk->collection->describe($request);

    if ($response->describeCollectionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\tigris\core\Models\Operations\TigrisDescribeCollectionRequest](../../models/operations/TigrisDescribeCollectionRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\tigris\core\Models\Operations\TigrisDescribeCollectionResponse](../../models/operations/TigrisDescribeCollectionResponse.md)**


## drop

Drops the collection inside this project. This API deletes all of the
 documents inside this collection and any metadata associated with it.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TigrisDropCollectionRequest();
    $request->dropCollectionRequest = new Shared\DropCollectionRequest();
    $request->dropCollectionRequest->branch = 'string';
    $request->dropCollectionRequest->options = new Shared\CollectionOptions();
    $request->collection = 'string';
    $request->project = 'string';

    $response = $sdk->collection->drop($request);

    if ($response->dropCollectionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\tigris\core\Models\Operations\TigrisDropCollectionRequest](../../models/operations/TigrisDropCollectionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisDropCollectionResponse](../../models/operations/TigrisDropCollectionResponse.md)**


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
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TigrisImportRequest();
    $request->importRequest = new Shared\ImportRequest();
    $request->importRequest->autogenerated = [
        'string',
    ];
    $request->importRequest->branch = 'string';
    $request->importRequest->createCollection = false;
    $request->importRequest->documents = [
        new Shared\Documents(),
    ];
    $request->importRequest->options = new Shared\ImportRequestOptions();
    $request->importRequest->options->writeOptions = new Shared\WriteOptions();
    $request->importRequest->primaryKey = [
        'string',
    ];
    $request->collection = 'string';
    $request->project = 'string';

    $response = $sdk->collection->importDocuments($request);

    if ($response->importResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\TigrisImportRequest](../../models/operations/TigrisImportRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisImportResponse](../../models/operations/TigrisImportResponse.md)**


## insertDocuments

Inserts new documents in the collection and returns an AlreadyExists error if any of the documents
 in the request already exists. Insert provides idempotency by returning an error if the document
 already exists. To replace documents, use REPLACE API instead of INSERT.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TigrisInsertRequest();
    $request->insertRequest = new Shared\InsertRequest();
    $request->insertRequest->branch = 'string';
    $request->insertRequest->documents = [
        new Shared\InsertRequestDocuments(),
    ];
    $request->insertRequest->options = new Shared\InsertRequestOptions();
    $request->insertRequest->options->writeOptions = new Shared\WriteOptions();
    $request->collection = 'string';
    $request->project = 'string';

    $response = $sdk->collection->insertDocuments($request);

    if ($response->insertResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\TigrisInsertRequest](../../models/operations/TigrisInsertRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisInsertResponse](../../models/operations/TigrisInsertResponse.md)**


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
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TigrisReadRequest();
    $request->readRequest = new Shared\ReadRequest();
    $request->readRequest->branch = 'string';
    $request->readRequest->fields = new Shared\Fields();
    $request->readRequest->filter = new Shared\ReadRequestFilter();
    $request->readRequest->options = new Shared\ReadRequestOptions();
    $request->readRequest->options->collation = new Shared\Collation();
    $request->readRequest->options->collation->case = 'string';
    $request->readRequest->options->limit = 649883;
    $request->readRequest->options->offset = 'string';
    $request->readRequest->options->skip = 11274;
    $request->readRequest->sort = 'string';
    $request->collection = 'string';
    $request->project = 'string';

    $response = $sdk->collection->readDocuments($request);

    if ($response->streamingReadResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\tigris\core\Models\Operations\TigrisReadRequest](../../models/operations/TigrisReadRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?\tigris\core\Models\Operations\TigrisReadResponse](../../models/operations/TigrisReadResponse.md)**


## replaceDocuments

Inserts the documents or replaces the existing documents in the collections.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TigrisReplaceRequest();
    $request->replaceRequest = new Shared\ReplaceRequest();
    $request->replaceRequest->branch = 'string';
    $request->replaceRequest->documents = [
        new Shared\ReplaceRequestDocuments(),
    ];
    $request->replaceRequest->options = new Shared\ReplaceRequestOptions();
    $request->replaceRequest->options->writeOptions = new Shared\WriteOptions();
    $request->collection = 'string';
    $request->project = 'string';

    $response = $sdk->collection->replaceDocuments($request);

    if ($response->replaceResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\tigris\core\Models\Operations\TigrisReplaceRequest](../../models/operations/TigrisReplaceRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\tigris\core\Models\Operations\TigrisReplaceResponse](../../models/operations/TigrisReplaceResponse.md)**


## searchDocuments

Searches a collection for the documents matching the query, or messages in case of event streaming. A search can be
 a term search or a phrase search. Search API allows filtering the result set using filters as documented <a href="https://docs.tigrisdata.com/overview/query#specification-1" title="here">here</a>.
 You can also perform a faceted search by passing the fields in the facet parameter.
 You can find more detailed documentation of the Search API with multiple examples <a href="https://docs.tigrisdata.com/overview/search" title="here">here</a>.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TigrisSearchRequest();
    $request->searchRequest = new Shared\SearchRequest();
    $request->searchRequest->branch = 'string';
    $request->searchRequest->collation = new Shared\Collation();
    $request->searchRequest->collation->case = 'string';
    $request->searchRequest->excludeFields = [
        'string',
    ];
    $request->searchRequest->facet = new Shared\Facet();
    $request->searchRequest->fields = new Shared\SearchRequestFields();
    $request->searchRequest->filter = new Shared\SearchRequestFilter();
    $request->searchRequest->includeFields = [
        'string',
    ];
    $request->searchRequest->page = 124504;
    $request->searchRequest->pageSize = 87653;
    $request->searchRequest->q = 'string';
    $request->searchRequest->searchFields = [
        'string',
    ];
    $request->searchRequest->sort = new Shared\Sort();
    $request->collection = 'string';
    $request->project = 'string';

    $response = $sdk->collection->searchDocuments($request);

    if ($response->streamingSearchResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\TigrisSearchRequest](../../models/operations/TigrisSearchRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisSearchResponse](../../models/operations/TigrisSearchResponse.md)**


## updateDocuments

Update a range of documents in the collection using the condition provided in the filter.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '';

$sdk = core\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TigrisUpdateRequest();
    $request->updateRequest = new Shared\UpdateRequest();
    $request->updateRequest->branch = 'string';
    $request->updateRequest->fields = new Shared\UpdateRequestFields();
    $request->updateRequest->filter = new Shared\UpdateRequestFilter();
    $request->updateRequest->options = new Shared\UpdateRequestOptions();
    $request->updateRequest->options->collation = new Shared\Collation();
    $request->updateRequest->options->collation->case = 'string';
    $request->updateRequest->options->limit = 286496;
    $request->updateRequest->options->writeOptions = new Shared\WriteOptions();
    $request->collection = 'string';
    $request->project = 'string';

    $response = $sdk->collection->updateDocuments($request);

    if ($response->updateResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\TigrisUpdateRequest](../../models/operations/TigrisUpdateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\TigrisUpdateResponse](../../models/operations/TigrisUpdateResponse.md)**

