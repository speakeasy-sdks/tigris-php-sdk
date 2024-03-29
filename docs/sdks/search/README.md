# Search


## Overview

The search section provides you APIs that can be used to implement powerful apps with search experiences. You can manage storing documents on your own or you can simply integrate it with your database.

### Available Operations

* [createDocument](#createdocument) - Create a single document
* [createDocuments](#createdocuments) - Create multiple documents
* [deleteDocuments](#deletedocuments) - Delete documents by ids
* [deleteIndex](#deleteindex) - Deletes search index
* [findDocuments](#finddocuments) - Search Documents.
* [getDocuments](#getdocuments) - Get a single or multiple documents
* [getIndex](#getindex) - Get information about a search index
* [listIndexes](#listindexes) - List search indexes
* [queryDeleteDocuments](#querydeletedocuments) - Delete documents by query
* [replaceDocuments](#replacedocuments) - Create or replace documents in an index
* [updateDocuments](#updatedocuments) - Update documents in an index
* [updateIndex](#updateindex) - Creates or updates search index

## createDocument

CreateById is used for indexing a single document. The API expects a single document. An "id" is optional
 and the server can automatically generate it for you in case it is missing. In cases an id is provided in
 the document and the document already exists then that document will not be indexed and an error is returned
 with HTTP status code 409.

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
        $request = new Operations\SearchCreateByIdRequest();
    $request->createByIdRequest = new Shared\CreateByIdRequest();
    $request->createByIdRequest->document = '<value>';
    $request->createByIdRequest->id = '<id>';
    $request->createByIdRequest->index = '<value>';
    $request->createByIdRequest->project = '<value>';
    $request->id = '<id>';
    $request->index = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->createDocument($request);

    if ($response->createByIdResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\tigris\core\Models\Operations\SearchCreateByIdRequest](../../Models/Operations/SearchCreateByIdRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\tigris\core\Models\Operations\SearchCreateByIdResponse](../../Models/Operations/SearchCreateByIdResponse.md)**


## createDocuments

Create is used for indexing a single or multiple documents. The API expects an array of documents.
 Each document is a JSON object. An "id" is optional and the server can automatically generate it for you in
 case it is missing. In cases when an id is provided in the document and the document already exists then that
 document will not be indexed and in the response there will be an error corresponding to that document id other
 documents will succeed. Returns an array of status indicating the status of each document.

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
        $request = new Operations\SearchCreateRequest();
    $request->createDocumentRequest = new Shared\CreateDocumentRequest();
    $request->createDocumentRequest->documents = [
        '<value>',
    ];
    $request->createDocumentRequest->index = '<value>';
    $request->createDocumentRequest->project = '<value>';
    $request->index = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->createDocuments($request);

    if ($response->createDocumentResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\SearchCreateRequest](../../Models/Operations/SearchCreateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\SearchCreateResponse](../../Models/Operations/SearchCreateResponse.md)**


## deleteDocuments

Delete one or more documents by id. Returns an array of status indicating the status of each document. Each status
 has an error field that is set to null in case document is deleted successfully otherwise it will non null with
 an error code and message.

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
        $request = new Operations\SearchDeleteRequest();
    $request->deleteDocumentRequest = new Shared\DeleteDocumentRequest();
    $request->deleteDocumentRequest->ids = [
        '<value>',
    ];
    $request->deleteDocumentRequest->index = '<value>';
    $request->deleteDocumentRequest->project = '<value>';
    $request->index = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->deleteDocuments($request);

    if ($response->deleteDocumentResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\SearchDeleteRequest](../../Models/Operations/SearchDeleteRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\SearchDeleteResponse](../../Models/Operations/SearchDeleteResponse.md)**


## deleteIndex

Deletes search index

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
        $request = new Operations\SearchDeleteIndexRequest();
    $request->deleteIndexRequest = new Shared\DeleteIndexRequest();
    $request->deleteIndexRequest->name = '<value>';
    $request->deleteIndexRequest->project = '<value>';
    $request->name = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->deleteIndex($request);

    if ($response->deleteIndexResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\tigris\core\Models\Operations\SearchDeleteIndexRequest](../../Models/Operations/SearchDeleteIndexRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\tigris\core\Models\Operations\SearchDeleteIndexResponse](../../Models/Operations/SearchDeleteIndexResponse.md)**


## findDocuments

Searches an index for the documents matching the query. A search can be a term search or a phrase search.
 Search API allows filtering the result set using filters as documented
 <a href="https://docs.tigrisdata.com/overview/query#specification-1" title="here">here</a>. You can also perform
 a faceted search by passing the fields in the facet parameter. You can find more detailed documentation of the
 Search API with multiple examples <a href="https://docs.tigrisdata.com/overview/search" title="here">here</a>.

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
        $request = new Operations\SearchSearchRequest();
    $request->searchIndexRequest = new Shared\SearchIndexRequest();
    $request->searchIndexRequest->collation = new Shared\Collation();
    $request->searchIndexRequest->collation->case = '<value>';
    $request->searchIndexRequest->excludeFields = [
        '<value>',
    ];
    $request->searchIndexRequest->facet = '<value>';
    $request->searchIndexRequest->filter = '<value>';
    $request->searchIndexRequest->includeFields = [
        '<value>',
    ];
    $request->searchIndexRequest->index = '<value>';
    $request->searchIndexRequest->page = 71364;
    $request->searchIndexRequest->pageSize = 998280;
    $request->searchIndexRequest->project = '<value>';
    $request->searchIndexRequest->q = '<value>';
    $request->searchIndexRequest->searchFields = [
        '<value>',
    ];
    $request->searchIndexRequest->sort = '<value>';
    $request->index = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->findDocuments($request);

    if ($response->searchIndexResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\SearchSearchRequest](../../Models/Operations/SearchSearchRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\SearchSearchResponse](../../Models/Operations/SearchSearchResponse.md)**


## getDocuments

Retrieves one or more documents by id. The response is an array of documents in the same order it is requests.
 A null is returned for the documents that are not found.

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
        $request = new Operations\SearchGetRequest();
    $request->ids = [
        '<value>',
    ];
    $request->index = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->getDocuments($request);

    if ($response->getDocumentResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\tigris\core\Models\Operations\SearchGetRequest](../../Models/Operations/SearchGetRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\tigris\core\Models\Operations\SearchGetResponse](../../Models/Operations/SearchGetResponse.md)**


## getIndex

Get information about a search index

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
        $request = new Operations\SearchGetIndexRequest();
    $request->name = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->getIndex($request);

    if ($response->getIndexResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\tigris\core\Models\Operations\SearchGetIndexRequest](../../Models/Operations/SearchGetIndexRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\tigris\core\Models\Operations\SearchGetIndexResponse](../../Models/Operations/SearchGetIndexResponse.md)**


## listIndexes

List search indexes

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
        $request = new Operations\SearchListIndexesRequest();
    $request->filterBranch = '<value>';
    $request->filterCollection = '<value>';
    $request->filterType = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->listIndexes($request);

    if ($response->listIndexesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\tigris\core\Models\Operations\SearchListIndexesRequest](../../Models/Operations/SearchListIndexesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\tigris\core\Models\Operations\SearchListIndexesResponse](../../Models/Operations/SearchListIndexesResponse.md)**


## queryDeleteDocuments

DeleteByQuery is used to delete documents that match the filter. A filter is required. To delete document by id,
 you can pass the filter as follows ```{"id": "test"}```. Returns a count of number of documents deleted.

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
        $request = new Operations\SearchDeleteByQueryRequest();
    $request->deleteByQueryRequest = new Shared\DeleteByQueryRequest();
    $request->deleteByQueryRequest->filter = '<value>';
    $request->deleteByQueryRequest->index = '<value>';
    $request->deleteByQueryRequest->project = '<value>';
    $request->index = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->queryDeleteDocuments($request);

    if ($response->deleteByQueryResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\tigris\core\Models\Operations\SearchDeleteByQueryRequest](../../Models/Operations/SearchDeleteByQueryRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\tigris\core\Models\Operations\SearchDeleteByQueryResponse](../../Models/Operations/SearchDeleteByQueryResponse.md)**


## replaceDocuments

Creates or replaces one or more documents. Each document is a JSON object. A document is replaced
 if it already exists. An "id" is generated automatically in case it is missing in the document. The
 document is created if "id" doesn't exists otherwise it is replaced. Returns an array of status indicating
 the status of each document.

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
        $request = new Operations\SearchCreateOrReplaceRequest();
    $request->createOrReplaceDocumentRequest = new Shared\CreateOrReplaceDocumentRequest();
    $request->createOrReplaceDocumentRequest->documents = [
        '<value>',
    ];
    $request->createOrReplaceDocumentRequest->index = '<value>';
    $request->createOrReplaceDocumentRequest->project = '<value>';
    $request->index = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->replaceDocuments($request);

    if ($response->createOrReplaceDocumentResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\tigris\core\Models\Operations\SearchCreateOrReplaceRequest](../../Models/Operations/SearchCreateOrReplaceRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\tigris\core\Models\Operations\SearchCreateOrReplaceResponse](../../Models/Operations/SearchCreateOrReplaceResponse.md)**


## updateDocuments

Updates one or more documents by "id". Each document is required to have the
 "id" field in it. Returns an array of status indicating the status of each document. Each status
 has an error field that is set to null in case document is updated successfully otherwise the error
 field is set with a code and message.

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
        $request = new Operations\SearchUpdateRequest();
    $request->updateDocumentRequest = new Shared\UpdateDocumentRequest();
    $request->updateDocumentRequest->documents = [
        '<value>',
    ];
    $request->updateDocumentRequest->index = '<value>';
    $request->updateDocumentRequest->project = '<value>';
    $request->index = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->updateDocuments($request);

    if ($response->updateDocumentResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\SearchUpdateRequest](../../Models/Operations/SearchUpdateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\SearchUpdateResponse](../../Models/Operations/SearchUpdateResponse.md)**


## updateIndex

Creates or updates search index

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
        $request = new Operations\SearchCreateOrUpdateIndexRequest();
    $request->createOrUpdateIndexRequest = new Shared\CreateOrUpdateIndexRequest();
    $request->createOrUpdateIndexRequest->name = '<value>';
    $request->createOrUpdateIndexRequest->onlyCreate = false;
    $request->createOrUpdateIndexRequest->project = '<value>';
    $request->createOrUpdateIndexRequest->schema = '<value>';
    $request->name = '<value>';
    $request->project = '<value>';;

    $response = $sdk->search->updateIndex($request);

    if ($response->createOrUpdateIndexResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\tigris\core\Models\Operations\SearchCreateOrUpdateIndexRequest](../../Models/Operations/SearchCreateOrUpdateIndexRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\tigris\core\Models\Operations\SearchCreateOrUpdateIndexResponse](../../Models/Operations/SearchCreateOrUpdateIndexResponse.md)**

