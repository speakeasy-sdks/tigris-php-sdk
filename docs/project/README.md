# project

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisCreateProjectRequest();
    $request->requestBody = [
        'quae' => 'aut',
    ];
    $request->project = 'quas';

    $response = $sdk->project->create($request);

    if ($response->createProjectResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDeleteProjectRequest();
    $request->requestBody = [
        'consequatur' => 'est',
        'repellendus' => 'porro',
        'doloribus' => 'ut',
        'facilis' => 'cupiditate',
    ];
    $request->project = 'qui';

    $response = $sdk->project->deleteProject($request);

    if ($response->deleteProjectResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## list

List returns all the projects.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;

$sdk = SDK::builder()
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
