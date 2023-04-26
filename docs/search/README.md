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
    $request->createByIdRequest->document = 'quae';
    $request->createByIdRequest->id = '879fce95-3f73-4ef7-bbc7-abd74dd39c0f';
    $request->createByIdRequest->index = 'exercitationem';
    $request->createByIdRequest->project = 'nulla';
    $request->id = '2cff7c70-a456-426d-8368-13f16d9f5fce';
    $request->index = 'ea';
    $request->project = 'impedit';

    $response = $sdk->search->createDocument($request);

    if ($response->createByIdResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
        'veniam',
        'aliquid',
    ];
    $request->createDocumentRequest->index = 'inventore';
    $request->createDocumentRequest->project = 'magnam';
    $request->index = 'ea';
    $request->project = 'quo';

    $response = $sdk->search->createDocuments($request);

    if ($response->createDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
        'recusandae',
    ];
    $request->deleteDocumentRequest->index = 'aspernatur';
    $request->deleteDocumentRequest->project = 'minima';
    $request->index = 'eaque';
    $request->project = 'a';

    $response = $sdk->search->deleteDocuments($request);

    if ($response->deleteDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->deleteIndexRequest->name = 'Richard Anderson';
    $request->deleteIndexRequest->project = 'aliquam';
    $request->name = 'Eloise Block MD';
    $request->project = 'laborum';

    $response = $sdk->search->deleteIndex($request);

    if ($response->deleteIndexResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->searchIndexRequest->collation->case = 'placeat';
    $request->searchIndexRequest->excludeFields = [
        'eum',
    ];
    $request->searchIndexRequest->facet = 'autem';
    $request->searchIndexRequest->filter = 'nobis';
    $request->searchIndexRequest->includeFields = [
        'assumenda',
        'nulla',
        'voluptas',
    ];
    $request->searchIndexRequest->index = 'libero';
    $request->searchIndexRequest->page = 96549;
    $request->searchIndexRequest->pageSize = 270328;
    $request->searchIndexRequest->project = 'numquam';
    $request->searchIndexRequest->q = 'explicabo';
    $request->searchIndexRequest->searchFields = [
        'ipsa',
        'molestiae',
        'magnam',
    ];
    $request->searchIndexRequest->sort = 'odio';
    $request->index = 'eius';
    $request->project = 'esse';

    $response = $sdk->search->findDocuments($request);

    if ($response->searchIndexResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
        'rem',
        'fuga',
    ];
    $request->index = 'reprehenderit';
    $request->project = 'quidem';

    $response = $sdk->search->getDocuments($request);

    if ($response->getDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->name = 'Bernard Kerluke';
    $request->project = 'eos';

    $response = $sdk->search->getIndex($request);

    if ($response->getIndexResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->filterBranch = 'praesentium';
    $request->filterCollection = 'quisquam';
    $request->filterType = 'veritatis';
    $request->project = 'ipsa';

    $response = $sdk->search->listIndexes($request);

    if ($response->listIndexesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->deleteByQueryRequest->filter = 'id';
    $request->deleteByQueryRequest->index = 'quidem';
    $request->deleteByQueryRequest->project = 'neque';
    $request->index = 'quo';
    $request->project = 'illum';

    $response = $sdk->search->queryDeleteDocuments($request);

    if ($response->deleteByQueryResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
        'fuga',
        'eius',
        'eos',
        'voluptas',
    ];
    $request->createOrReplaceDocumentRequest->index = 'ab';
    $request->createOrReplaceDocumentRequest->project = 'cupiditate';
    $request->index = 'consequatur';
    $request->project = 'tempora';

    $response = $sdk->search->replaceDocuments($request);

    if ($response->createOrReplaceDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
        'ipsam',
        'aspernatur',
        'sequi',
        'quo',
    ];
    $request->updateDocumentRequest->index = 'esse';
    $request->updateDocumentRequest->project = 'recusandae';
    $request->index = 'aperiam';
    $request->project = 'distinctio';

    $response = $sdk->search->updateDocuments($request);

    if ($response->updateDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->createOrUpdateIndexRequest->name = 'Cody Blick';
    $request->createOrUpdateIndexRequest->onlyCreate = false;
    $request->createOrUpdateIndexRequest->project = 'accusamus';
    $request->createOrUpdateIndexRequest->schema = 'aliquam';
    $request->name = 'Violet Johns';
    $request->project = 'deserunt';

    $response = $sdk->search->updateIndex($request);

    if ($response->createOrUpdateIndexResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
