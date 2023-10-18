# Project
(*project*)

## Overview

Every Tigris projects comes with a transactional document database built on FoundationDB, one of the most resilient and battle-tested open source distributed key-value store. A database is created automatically for you when you create a project.

### Available Operations

* [create](#create) - Create Project
* [deleteProject](#deleteproject) - Delete Project and all resources under project
* [list](#list) - List Projects

## create

Creates a new project. Returns an AlreadyExists error with a status code 409 if the project already exists.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisCreateProjectRequest;
use \tigris\core\Models\Shared\CreateProjectRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisCreateProjectRequest();
    $request->createProjectRequest = new CreateProjectRequest();
    $request->project = 'neural';

    $response = $sdk->project->create($request);

    if ($response->createProjectResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\tigris\core\Models\Operations\TigrisCreateProjectRequest](../../models/operations/TigrisCreateProjectRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\tigris\core\Models\Operations\TigrisCreateProjectResponse](../../models/operations/TigrisCreateProjectResponse.md)**


## deleteProject

Delete Project deletes all the collections in this project along with all of the documents, and associated metadata for these collections.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteProjectRequest;
use \tigris\core\Models\Shared\DeleteProjectRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TigrisDeleteProjectRequest();
    $request->deleteProjectRequest = new DeleteProjectRequest();
    $request->project = 'Diesel';

    $response = $sdk->project->deleteProject($request);

    if ($response->deleteProjectResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\tigris\core\Models\Operations\TigrisDeleteProjectRequest](../../models/operations/TigrisDeleteProjectRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |


### Response

**[?\tigris\core\Models\Operations\TigrisDeleteProjectResponse](../../models/operations/TigrisDeleteProjectResponse.md)**


## list

List returns all the projects.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;

$security = new Security();
$security->bearerAuth = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->project->list();

    if ($response->listProjectsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\tigris\core\Models\Operations\TigrisListProjectsResponse](../../models/operations/TigrisListProjectsResponse.md)**

