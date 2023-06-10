# search

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
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchCreateByIdRequest;
use \tigris\core\Models\Shared\CreateByIdRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchCreateByIdRequest();
    $request->createByIdRequest = new CreateByIdRequest();
    $request->createByIdRequest->document = 'eaque';
    $request->createByIdRequest->id = 'd5f0d30c-5fbb-4258-b053-202c73d5fe9b';
    $request->createByIdRequest->index = 'perspiciatis';
    $request->createByIdRequest->project = 'voluptatem';
    $request->id = 'c28909b3-fe49-4a8d-9cbf-48633323f9b7';
    $request->index = 'dignissimos';
    $request->project = 'reiciendis';

    $response = $sdk->search->createDocument($request);

    if ($response->createByIdResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\tigris\core\Models\Operations\SearchCreateByIdRequest](../../models/operations/SearchCreateByIdRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\tigris\core\Models\Operations\SearchCreateByIdResponse](../../models/operations/SearchCreateByIdResponse.md)**


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
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchCreateRequest;
use \tigris\core\Models\Shared\CreateDocumentRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchCreateRequest();
    $request->createDocumentRequest = new CreateDocumentRequest();
    $request->createDocumentRequest->documents = [
        'dolorum',
    ];
    $request->createDocumentRequest->index = 'numquam';
    $request->createDocumentRequest->project = 'veritatis';
    $request->index = 'ipsa';
    $request->project = 'ipsa';

    $response = $sdk->search->createDocuments($request);

    if ($response->createDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\SearchCreateRequest](../../models/operations/SearchCreateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\SearchCreateResponse](../../models/operations/SearchCreateResponse.md)**


## deleteDocuments

Delete one or more documents by id. Returns an array of status indicating the status of each document. Each status
 has an error field that is set to null in case document is deleted successfully otherwise it will non null with
 an error code and message.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchDeleteRequest;
use \tigris\core\Models\Shared\DeleteDocumentRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchDeleteRequest();
    $request->deleteDocumentRequest = new DeleteDocumentRequest();
    $request->deleteDocumentRequest->ids = [
        'odio',
        'quaerat',
    ];
    $request->deleteDocumentRequest->index = 'accusamus';
    $request->deleteDocumentRequest->project = 'quidem';
    $request->index = 'voluptatibus';
    $request->project = 'voluptas';

    $response = $sdk->search->deleteDocuments($request);

    if ($response->deleteDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\SearchDeleteRequest](../../models/operations/SearchDeleteRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\SearchDeleteResponse](../../models/operations/SearchDeleteResponse.md)**


## deleteIndex

Deletes search index

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchDeleteIndexRequest;
use \tigris\core\Models\Shared\DeleteIndexRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchDeleteIndexRequest();
    $request->deleteIndexRequest = new DeleteIndexRequest();
    $request->deleteIndexRequest->name = 'Dr. Craig Littel DDS';
    $request->deleteIndexRequest->project = 'dolorum';
    $request->name = 'Colleen Pagac';
    $request->project = 'necessitatibus';

    $response = $sdk->search->deleteIndex($request);

    if ($response->deleteIndexResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\tigris\core\Models\Operations\SearchDeleteIndexRequest](../../models/operations/SearchDeleteIndexRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\tigris\core\Models\Operations\SearchDeleteIndexResponse](../../models/operations/SearchDeleteIndexResponse.md)**


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
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchSearchRequest;
use \tigris\core\Models\Shared\SearchIndexRequest;
use \tigris\core\Models\Shared\Collation;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchSearchRequest();
    $request->searchIndexRequest = new SearchIndexRequest();
    $request->searchIndexRequest->collation = new Collation();
    $request->searchIndexRequest->collation->case = 'distinctio';
    $request->searchIndexRequest->excludeFields = [
        'nihil',
        'ipsum',
        'voluptate',
        'id',
    ];
    $request->searchIndexRequest->facet = 'saepe';
    $request->searchIndexRequest->filter = 'eius';
    $request->searchIndexRequest->includeFields = [
        'perferendis',
    ];
    $request->searchIndexRequest->index = 'amet';
    $request->searchIndexRequest->page = 758379;
    $request->searchIndexRequest->pageSize = 881586;
    $request->searchIndexRequest->project = 'ad';
    $request->searchIndexRequest->q = 'saepe';
    $request->searchIndexRequest->searchFields = [
        'deserunt',
        'provident',
    ];
    $request->searchIndexRequest->sort = 'minima';
    $request->index = 'repellendus';
    $request->project = 'totam';

    $response = $sdk->search->findDocuments($request);

    if ($response->searchIndexResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\SearchSearchRequest](../../models/operations/SearchSearchRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\SearchSearchResponse](../../models/operations/SearchSearchResponse.md)**


## getDocuments

Retrieves one or more documents by id. The response is an array of documents in the same order it is requests.
 A null is returned for the documents that are not found.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchGetRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchGetRequest();
    $request->ids = [
        'alias',
        'at',
        'quaerat',
    ];
    $request->index = 'tempora';
    $request->project = 'vel';

    $response = $sdk->search->getDocuments($request);

    if ($response->getDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\tigris\core\Models\Operations\SearchGetRequest](../../models/operations/SearchGetRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\tigris\core\Models\Operations\SearchGetResponse](../../models/operations/SearchGetResponse.md)**


## getIndex

Get information about a search index

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchGetIndexRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchGetIndexRequest();
    $request->name = 'Erick Denesik';
    $request->project = 'esse';

    $response = $sdk->search->getIndex($request);

    if ($response->getIndexResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\tigris\core\Models\Operations\SearchGetIndexRequest](../../models/operations/SearchGetIndexRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\tigris\core\Models\Operations\SearchGetIndexResponse](../../models/operations/SearchGetIndexResponse.md)**


## listIndexes

List search indexes

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchListIndexesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchListIndexesRequest();
    $request->filterBranch = 'harum';
    $request->filterCollection = 'iusto';
    $request->filterType = 'ipsum';
    $request->project = 'quisquam';

    $response = $sdk->search->listIndexes($request);

    if ($response->listIndexesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\tigris\core\Models\Operations\SearchListIndexesRequest](../../models/operations/SearchListIndexesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\tigris\core\Models\Operations\SearchListIndexesResponse](../../models/operations/SearchListIndexesResponse.md)**


## queryDeleteDocuments

DeleteByQuery is used to delete documents that match the filter. A filter is required. To delete document by id,
 you can pass the filter as follows ```{"id": "test"}```. Returns a count of number of documents deleted.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchDeleteByQueryRequest;
use \tigris\core\Models\Shared\DeleteByQueryRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchDeleteByQueryRequest();
    $request->deleteByQueryRequest = new DeleteByQueryRequest();
    $request->deleteByQueryRequest->filter = 'tenetur';
    $request->deleteByQueryRequest->index = 'amet';
    $request->deleteByQueryRequest->project = 'tempore';
    $request->index = 'accusamus';
    $request->project = 'numquam';

    $response = $sdk->search->queryDeleteDocuments($request);

    if ($response->deleteByQueryResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\tigris\core\Models\Operations\SearchDeleteByQueryRequest](../../models/operations/SearchDeleteByQueryRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\tigris\core\Models\Operations\SearchDeleteByQueryResponse](../../models/operations/SearchDeleteByQueryResponse.md)**


## replaceDocuments

Creates or replaces one or more documents. Each document is a JSON object. A document is replaced
 if it already exists. An "id" is generated automatically in case it is missing in the document. The
 document is created if "id" doesn't exists otherwise it is replaced. Returns an array of status indicating
 the status of each document.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchCreateOrReplaceRequest;
use \tigris\core\Models\Shared\CreateOrReplaceDocumentRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchCreateOrReplaceRequest();
    $request->createOrReplaceDocumentRequest = new CreateOrReplaceDocumentRequest();
    $request->createOrReplaceDocumentRequest->documents = [
        'dolorem',
        'sapiente',
    ];
    $request->createOrReplaceDocumentRequest->index = 'totam';
    $request->createOrReplaceDocumentRequest->project = 'nihil';
    $request->index = 'sit';
    $request->project = 'expedita';

    $response = $sdk->search->replaceDocuments($request);

    if ($response->createOrReplaceDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\tigris\core\Models\Operations\SearchCreateOrReplaceRequest](../../models/operations/SearchCreateOrReplaceRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\tigris\core\Models\Operations\SearchCreateOrReplaceResponse](../../models/operations/SearchCreateOrReplaceResponse.md)**


## updateDocuments

Updates one or more documents by "id". Each document is required to have the
 "id" field in it. Returns an array of status indicating the status of each document. Each status
 has an error field that is set to null in case document is updated successfully otherwise the error
 field is set with a code and message.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchUpdateRequest;
use \tigris\core\Models\Shared\UpdateDocumentRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchUpdateRequest();
    $request->updateDocumentRequest = new UpdateDocumentRequest();
    $request->updateDocumentRequest->documents = [
        'sed',
    ];
    $request->updateDocumentRequest->index = 'vel';
    $request->updateDocumentRequest->project = 'libero';
    $request->index = 'voluptas';
    $request->project = 'deserunt';

    $response = $sdk->search->updateDocuments($request);

    if ($response->updateDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\tigris\core\Models\Operations\SearchUpdateRequest](../../models/operations/SearchUpdateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\tigris\core\Models\Operations\SearchUpdateResponse](../../models/operations/SearchUpdateResponse.md)**


## updateIndex

Creates or updates search index

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\SearchCreateOrUpdateIndexRequest;
use \tigris\core\Models\Shared\CreateOrUpdateIndexRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchCreateOrUpdateIndexRequest();
    $request->createOrUpdateIndexRequest = new CreateOrUpdateIndexRequest();
    $request->createOrUpdateIndexRequest->name = 'Tracy Gottlieb';
    $request->createOrUpdateIndexRequest->onlyCreate = false;
    $request->createOrUpdateIndexRequest->project = 'maxime';
    $request->createOrUpdateIndexRequest->schema = 'pariatur';
    $request->name = 'Keith Padberg';
    $request->project = 'aspernatur';

    $response = $sdk->search->updateIndex($request);

    if ($response->createOrUpdateIndexResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\tigris\core\Models\Operations\SearchCreateOrUpdateIndexRequest](../../models/operations/SearchCreateOrUpdateIndexRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\tigris\core\Models\Operations\SearchCreateOrUpdateIndexResponse](../../models/operations/SearchCreateOrUpdateIndexResponse.md)**
