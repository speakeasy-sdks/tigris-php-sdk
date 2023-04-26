# collection

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisCreateOrUpdateCollectionRequest();
    $request->createOrUpdateCollectionRequest = new CreateOrUpdateCollectionRequest();
    $request->createOrUpdateCollectionRequest->branch = 'laborum';
    $request->createOrUpdateCollectionRequest->onlyCreate = false;
    $request->createOrUpdateCollectionRequest->options = [
        'non' => 'occaecati',
        'enim' => 'accusamus',
        'delectus' => 'quidem',
        'provident' => 'nam',
    ];
    $request->createOrUpdateCollectionRequest->schema = [
        'blanditiis' => 'deleniti',
        'sapiente' => 'amet',
        'deserunt' => 'nisi',
    ];
    $request->collection = 'vel';
    $request->project = 'natus';

    $response = $sdk->collection->create($request);

    if ($response->createOrUpdateCollectionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
use \tigris\core\Models\Shared\DeleteRequestOptions;
use \tigris\core\Models\Shared\Collation;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDeleteRequest();
    $request->deleteRequest = new DeleteRequest();
    $request->deleteRequest->branch = 'omnis';
    $request->deleteRequest->filter = [
        'perferendis' => 'nihil',
        'magnam' => 'distinctio',
    ];
    $request->deleteRequest->options = new DeleteRequestOptions();
    $request->deleteRequest->options->collation = new Collation();
    $request->deleteRequest->options->collation->case = 'id';
    $request->deleteRequest->options->limit = 287991;
    $request->deleteRequest->options->writeOptions = [
        'suscipit' => 'natus',
        'nobis' => 'eum',
    ];
    $request->collection = 'vero';
    $request->project = 'aspernatur';

    $response = $sdk->collection->deleteDocuments($request);

    if ($response->deleteResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDescribeCollectionRequest();
    $request->describeCollectionRequest = new DescribeCollectionRequest();
    $request->describeCollectionRequest->branch = 'architecto';
    $request->describeCollectionRequest->collection = 'magnam';
    $request->describeCollectionRequest->options = [
        'excepturi' => 'ullam',
    ];
    $request->describeCollectionRequest->project = 'provident';
    $request->describeCollectionRequest->schemaFormat = 'quos';
    $request->collection = 'sint';
    $request->project = 'accusantium';

    $response = $sdk->collection->describe($request);

    if ($response->describeCollectionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDropCollectionRequest();
    $request->dropCollectionRequest = new DropCollectionRequest();
    $request->dropCollectionRequest->branch = 'mollitia';
    $request->dropCollectionRequest->options = [
        'mollitia' => 'ad',
        'eum' => 'dolor',
        'necessitatibus' => 'odit',
        'nemo' => 'quasi',
    ];
    $request->collection = 'iure';
    $request->project = 'doloribus';

    $response = $sdk->collection->drop($request);

    if ($response->dropCollectionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
use \tigris\core\Models\Shared\ImportRequestOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisImportRequest();
    $request->importRequest = new ImportRequest();
    $request->importRequest->autogenerated = [
        'eius',
        'maxime',
        'deleniti',
        'facilis',
    ];
    $request->importRequest->branch = 'in';
    $request->importRequest->createCollection = false;
    $request->importRequest->documents = [
        [
            'repudiandae' => 'ullam',
        ],
    ];
    $request->importRequest->options = new ImportRequestOptions();
    $request->importRequest->options->writeOptions = [
        'nihil' => 'repellat',
        'quibusdam' => 'sed',
        'saepe' => 'pariatur',
    ];
    $request->importRequest->primaryKey = [
        'consequuntur',
    ];
    $request->collection = 'praesentium';
    $request->project = 'natus';

    $response = $sdk->collection->importDocuments($request);

    if ($response->importResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
use \tigris\core\Models\Shared\InsertRequestOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisInsertRequest();
    $request->insertRequest = new InsertRequest();
    $request->insertRequest->branch = 'magni';
    $request->insertRequest->documents = [
        [
            'illum' => 'pariatur',
            'maxime' => 'ea',
            'excepturi' => 'odit',
            'ea' => 'accusantium',
        ],
    ];
    $request->insertRequest->options = new InsertRequestOptions();
    $request->insertRequest->options->writeOptions = [
        'maiores' => 'quidem',
    ];
    $request->collection = 'ipsam';
    $request->project = 'voluptate';

    $response = $sdk->collection->insertDocuments($request);

    if ($response->insertResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
use \tigris\core\Models\Shared\ReadRequestOptions;
use \tigris\core\Models\Shared\Collation;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisReadRequest();
    $request->readRequest = new ReadRequest();
    $request->readRequest->branch = 'autem';
    $request->readRequest->fields = [
        'eaque' => 'pariatur',
        'nemo' => 'voluptatibus',
        'perferendis' => 'fugiat',
    ];
    $request->readRequest->filter = [
        'aut' => 'cumque',
    ];
    $request->readRequest->options = new ReadRequestOptions();
    $request->readRequest->options->collation = new Collation();
    $request->readRequest->options->collation->case = 'corporis';
    $request->readRequest->options->limit = 944124;
    $request->readRequest->options->offset = 'libero';
    $request->readRequest->options->skip = 749999;
    $request->readRequest->sort = 'dolores';
    $request->collection = 'quis';
    $request->project = 'totam';

    $response = $sdk->collection->readDocuments($request);

    if ($response->streamingReadResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
use \tigris\core\Models\Shared\ReplaceRequestOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisReplaceRequest();
    $request->replaceRequest = new ReplaceRequest();
    $request->replaceRequest->branch = 'dignissimos';
    $request->replaceRequest->documents = [
        [
            'nesciunt' => 'eos',
            'perferendis' => 'dolores',
        ],
    ];
    $request->replaceRequest->options = new ReplaceRequestOptions();
    $request->replaceRequest->options->writeOptions = [
        'quam' => 'dolor',
        'vero' => 'nostrum',
        'hic' => 'recusandae',
        'omnis' => 'facilis',
    ];
    $request->collection = 'perspiciatis';
    $request->project = 'voluptatem';

    $response = $sdk->collection->replaceDocuments($request);

    if ($response->replaceResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisSearchRequest();
    $request->searchRequest = new SearchRequest();
    $request->searchRequest->branch = 'porro';
    $request->searchRequest->collation = new Collation();
    $request->searchRequest->collation->case = 'consequuntur';
    $request->searchRequest->excludeFields = [
        'error',
        'eaque',
        'occaecati',
    ];
    $request->searchRequest->facet = [
        'adipisci' => 'asperiores',
        'earum' => 'modi',
        'iste' => 'dolorum',
    ];
    $request->searchRequest->fields = [
        'pariatur' => 'provident',
        'nobis' => 'libero',
        'delectus' => 'quaerat',
    ];
    $request->searchRequest->filter = [
        'aliquid' => 'dolorem',
        'dolorem' => 'dolor',
        'qui' => 'ipsum',
    ];
    $request->searchRequest->includeFields = [
        'excepturi',
        'cum',
        'voluptate',
        'dignissimos',
    ];
    $request->searchRequest->page = 970237;
    $request->searchRequest->pageSize = 227414;
    $request->searchRequest->q = 'dolorum';
    $request->searchRequest->searchFields = [
        'veritatis',
        'ipsa',
    ];
    $request->searchRequest->sort = [
        'iure' => 'odio',
    ];
    $request->collection = 'quaerat';
    $request->project = 'accusamus';

    $response = $sdk->collection->searchDocuments($request);

    if ($response->streamingSearchResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
use \tigris\core\Models\Shared\UpdateRequestOptions;
use \tigris\core\Models\Shared\Collation;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisUpdateRequest();
    $request->updateRequest = new UpdateRequest();
    $request->updateRequest->branch = 'quidem';
    $request->updateRequest->fields = [
        'voluptas' => 'natus',
        'eos' => 'atque',
        'sit' => 'fugiat',
        'ab' => 'soluta',
    ];
    $request->updateRequest->filter = [
        'iusto' => 'voluptate',
        'dolorum' => 'deleniti',
        'omnis' => 'necessitatibus',
    ];
    $request->updateRequest->options = new UpdateRequestOptions();
    $request->updateRequest->options->collation = new Collation();
    $request->updateRequest->options->collation->case = 'distinctio';
    $request->updateRequest->options->limit = 990339;
    $request->updateRequest->options->writeOptions = [
        'ipsum' => 'voluptate',
        'id' => 'saepe',
    ];
    $request->collection = 'eius';
    $request->project = 'aspernatur';

    $response = $sdk->collection->updateDocuments($request);

    if ($response->updateResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
