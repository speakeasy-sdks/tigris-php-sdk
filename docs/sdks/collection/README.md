# Collection
(*collection*)

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisCreateOrUpdateCollectionRequest;
use \tigris\core\Models\Shared\CreateOrUpdateCollectionRequest;
use \tigris\core\Models\Shared\CollectionOptions;
use \tigris\core\Models\Shared\CreateOrUpdateCollectionRequestSchema;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisCreateOrUpdateCollectionRequest();
    $request->createOrUpdateCollectionRequest = new CreateOrUpdateCollectionRequest();
    $request->createOrUpdateCollectionRequest->branch = 'Electric pirouette';
    $request->createOrUpdateCollectionRequest->onlyCreate = false;
    $request->createOrUpdateCollectionRequest->options = new CollectionOptions();
    $request->createOrUpdateCollectionRequest->schema = new CreateOrUpdateCollectionRequestSchema();
    $request->collection = 'Sausages ASCII';
    $request->project = 'alarm 4th connecting';

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteRequest;
use \tigris\core\Models\Shared\DeleteRequest;
use \tigris\core\Models\Shared\DeleteRequestFilter;
use \tigris\core\Models\Shared\DeleteRequestOptions;
use \tigris\core\Models\Shared\Collation;
use \tigris\core\Models\Shared\WriteOptions;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisDeleteRequest();
    $request->deleteRequest = new DeleteRequest();
    $request->deleteRequest->branch = 'Convertible consequently female';
    $request->deleteRequest->filter = new DeleteRequestFilter();
    $request->deleteRequest->options = new DeleteRequestOptions();
    $request->deleteRequest->options->collation = new Collation();
    $request->deleteRequest->options->collation->case = 'Card';
    $request->deleteRequest->options->limit = 725499;
    $request->deleteRequest->options->writeOptions = new WriteOptions();
    $request->collection = 'Programmable toy';
    $request->project = 'Awesome turquoise';

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDescribeCollectionRequest;
use \tigris\core\Models\Shared\DescribeCollectionRequest;
use \tigris\core\Models\Shared\CollectionOptions;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisDescribeCollectionRequest();
    $request->describeCollectionRequest = new DescribeCollectionRequest();
    $request->describeCollectionRequest->branch = 'morph Pickup';
    $request->describeCollectionRequest->collection = 'Home';
    $request->describeCollectionRequest->options = new CollectionOptions();
    $request->describeCollectionRequest->project = 'payment And Cloned';
    $request->describeCollectionRequest->schemaFormat = 'South whoever';
    $request->collection = 'Folk';
    $request->project = 'Chair';

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDropCollectionRequest;
use \tigris\core\Models\Shared\DropCollectionRequest;
use \tigris\core\Models\Shared\CollectionOptions;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisDropCollectionRequest();
    $request->dropCollectionRequest = new DropCollectionRequest();
    $request->dropCollectionRequest->branch = 'Tricycle Cummings';
    $request->dropCollectionRequest->options = new CollectionOptions();
    $request->collection = 'reboot Northern';
    $request->project = 'Considine Handmade Chips';

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisImportRequest;
use \tigris\core\Models\Shared\ImportRequest;
use \tigris\core\Models\Shared\ImportRequestDocuments;
use \tigris\core\Models\Shared\ImportRequestOptions;
use \tigris\core\Models\Shared\WriteOptions;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisImportRequest();
    $request->importRequest = new ImportRequest();
    $request->importRequest->autogenerated = [
        'voyage',
    ];
    $request->importRequest->branch = 'Northeast Sedan Peru';
    $request->importRequest->createCollection = false;
    $request->importRequest->documents = [
        new ImportRequestDocuments(),
    ];
    $request->importRequest->options = new ImportRequestOptions();
    $request->importRequest->options->writeOptions = new WriteOptions();
    $request->importRequest->primaryKey = [
        'invoice',
    ];
    $request->collection = 'Designer scornful Namibia';
    $request->project = 'lavender';

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisInsertRequest;
use \tigris\core\Models\Shared\InsertRequest;
use \tigris\core\Models\Shared\InsertRequestDocuments;
use \tigris\core\Models\Shared\InsertRequestOptions;
use \tigris\core\Models\Shared\WriteOptions;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisInsertRequest();
    $request->insertRequest = new InsertRequest();
    $request->insertRequest->branch = 'magnetic Hong National';
    $request->insertRequest->documents = [
        new InsertRequestDocuments(),
    ];
    $request->insertRequest->options = new InsertRequestOptions();
    $request->insertRequest->options->writeOptions = new WriteOptions();
    $request->collection = 'Lemke';
    $request->project = 'encompassing';

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisReadRequest;
use \tigris\core\Models\Shared\ReadRequest;
use \tigris\core\Models\Shared\ReadRequestFields;
use \tigris\core\Models\Shared\ReadRequestFilter;
use \tigris\core\Models\Shared\ReadRequestOptions;
use \tigris\core\Models\Shared\Collation;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisReadRequest();
    $request->readRequest = new ReadRequest();
    $request->readRequest->branch = 'West farad';
    $request->readRequest->fields = new ReadRequestFields();
    $request->readRequest->filter = new ReadRequestFilter();
    $request->readRequest->options = new ReadRequestOptions();
    $request->readRequest->options->collation = new Collation();
    $request->readRequest->options->collation->case = 'Books yellow';
    $request->readRequest->options->limit = 14580;
    $request->readRequest->options->offset = 'Southwest Central';
    $request->readRequest->options->skip = 738813;
    $request->readRequest->sort = 'Aston Lari';
    $request->collection = 'Account meter International';
    $request->project = 'Buckinghamshire';

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisReplaceRequest;
use \tigris\core\Models\Shared\ReplaceRequest;
use \tigris\core\Models\Shared\ReplaceRequestDocuments;
use \tigris\core\Models\Shared\ReplaceRequestOptions;
use \tigris\core\Models\Shared\WriteOptions;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisReplaceRequest();
    $request->replaceRequest = new ReplaceRequest();
    $request->replaceRequest->branch = 'female West Southeast';
    $request->replaceRequest->documents = [
        new ReplaceRequestDocuments(),
    ];
    $request->replaceRequest->options = new ReplaceRequestOptions();
    $request->replaceRequest->options->writeOptions = new WriteOptions();
    $request->collection = 'Total phew';
    $request->project = 'gee Coupe Bicycle';

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisSearchRequest;
use \tigris\core\Models\Shared\SearchRequest;
use \tigris\core\Models\Shared\Collation;
use \tigris\core\Models\Shared\SearchRequestFacet;
use \tigris\core\Models\Shared\SearchRequestFields;
use \tigris\core\Models\Shared\SearchRequestFilter;
use \tigris\core\Models\Shared\SearchRequestSort;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisSearchRequest();
    $request->searchRequest = new SearchRequest();
    $request->searchRequest->branch = 'Northwest';
    $request->searchRequest->collation = new Collation();
    $request->searchRequest->collation->case = 'teal';
    $request->searchRequest->excludeFields = [
        'Hybrid',
    ];
    $request->searchRequest->facet = new SearchRequestFacet();
    $request->searchRequest->fields = new SearchRequestFields();
    $request->searchRequest->filter = new SearchRequestFilter();
    $request->searchRequest->includeFields = [
        'Borders',
    ];
    $request->searchRequest->page = 920960;
    $request->searchRequest->pageSize = 576556;
    $request->searchRequest->q = 'monitor Chair Folk';
    $request->searchRequest->searchFields = [
        'Cambridgeshire',
    ];
    $request->searchRequest->sort = new SearchRequestSort();
    $request->collection = 'aut systems questionably';
    $request->project = 'programming';

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisUpdateRequest;
use \tigris\core\Models\Shared\UpdateRequest;
use \tigris\core\Models\Shared\UpdateRequestFields;
use \tigris\core\Models\Shared\UpdateRequestFilter;
use \tigris\core\Models\Shared\UpdateRequestOptions;
use \tigris\core\Models\Shared\Collation;
use \tigris\core\Models\Shared\WriteOptions;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisUpdateRequest();
    $request->updateRequest = new UpdateRequest();
    $request->updateRequest->branch = 'Northwest';
    $request->updateRequest->fields = new UpdateRequestFields();
    $request->updateRequest->filter = new UpdateRequestFilter();
    $request->updateRequest->options = new UpdateRequestOptions();
    $request->updateRequest->options->collation = new Collation();
    $request->updateRequest->options->collation->case = 'West';
    $request->updateRequest->options->limit = 845885;
    $request->updateRequest->options->writeOptions = new WriteOptions();
    $request->collection = 'Cruiser';
    $request->project = 'Steel Market';

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

