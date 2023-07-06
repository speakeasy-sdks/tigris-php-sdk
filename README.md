# tigris-data/tigris-api

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/tigris-php-sdk.git"
        }
    ],
    "require": {
        "tigris-data/tigris-api": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
```php
<?php

declare(strict_types=1);

use tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = 'corrupti';
    $request->project = 'provident';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);

use tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);

use tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);

use tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);

use tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);

use tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest;
use \tigris\core\Models\Shared\DeleteAppKeyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new TigrisDeleteAppKeyRequest();
    $request->deleteAppKeyRequest = new DeleteAppKeyRequest();
    $request->deleteAppKeyRequest->id = '89bd9d8d-69a6-474e-8f46-7cc8796ed151';
    $request->project = 'deserunt';

    $response = $sdk->appKey->delete($request);

    if ($response->deleteAppKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\CacheCreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheRequest;
use \tigris\core\Models\Shared\CreateCacheOptions;

$sdk = SDK::builder()
    ->build();

try {
    $request = new CacheCreateCacheRequest();
    $request->createCacheRequest = new CreateCacheRequest();
    $request->createCacheRequest->options = new CreateCacheOptions();
    $request->createCacheRequest->options->ttlMs = 548814;
    $request->name = 'Kelvin Sporer';
    $request->project = 'corrupti';

    $response = $sdk->cache->create($request);

    if ($response->createCacheResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```<!-- Start SDK Example Usage -->

<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [appKey](docs/sdks/appkey/README.md)

* [delete](docs/sdks/appkey/README.md#delete) - Deletes the app key
* [list](docs/sdks/appkey/README.md#list) - List all the app keys
* [rotate](docs/sdks/appkey/README.md#rotate) - Rotates the app key secret
* [tigrisCreateAppKey](docs/sdks/appkey/README.md#tigriscreateappkey) - Creates the app key
* [update](docs/sdks/appkey/README.md#update) - Updates the description of the app key

### [auth](docs/sdks/auth/README.md)

* [get](docs/sdks/auth/README.md#get) - Access Token

### [cache](docs/sdks/cache/README.md)

* [create](docs/sdks/cache/README.md#create) - Creates the cache
* [delete](docs/sdks/cache/README.md#delete) - Deletes the cache
* [deleteKeys](docs/sdks/cache/README.md#deletekeys) - Deletes an entry from cache
* [getKey](docs/sdks/cache/README.md#getkey) - Reads an entry from cache
* [getSetKey](docs/sdks/cache/README.md#getsetkey) - Sets an entry in the cache and returns the previous value if exists
* [list](docs/sdks/cache/README.md#list) - Lists all the caches for the given project
* [listKeys](docs/sdks/cache/README.md#listkeys) - Lists all the key for this cache
* [setKey](docs/sdks/cache/README.md#setkey) - Sets an entry in the cache

### [channel](docs/sdks/channel/README.md)

* [get](docs/sdks/channel/README.md#get) - Get the details about a channel
* [getMessages](docs/sdks/channel/README.md#getmessages) - Get all messages for a channel
* [list](docs/sdks/channel/README.md#list) - Get all channels for your application project
* [listSubscriptions](docs/sdks/channel/README.md#listsubscriptions) - Get the subscriptions details about a channel
* [pushMessages](docs/sdks/channel/README.md#pushmessages) - push messages to a single channel
* [realtimePresence](docs/sdks/channel/README.md#realtimepresence) - Presence about the channel

### [collection](docs/sdks/collection/README.md)

* [create](docs/sdks/collection/README.md#create) - Create or update a collection
* [deleteDocuments](docs/sdks/collection/README.md#deletedocuments) - Delete Documents
* [describe](docs/sdks/collection/README.md#describe) - Describe Collection
* [drop](docs/sdks/collection/README.md#drop) - Drop Collection
* [importDocuments](docs/sdks/collection/README.md#importdocuments) - Import Documents
* [insertDocuments](docs/sdks/collection/README.md#insertdocuments) - Insert Documents
* [readDocuments](docs/sdks/collection/README.md#readdocuments) - Read Documents
* [replaceDocuments](docs/sdks/collection/README.md#replacedocuments) - Insert or Replace Documents
* [searchDocuments](docs/sdks/collection/README.md#searchdocuments) - Search Documents.
* [updateDocuments](docs/sdks/collection/README.md#updatedocuments) - Update Documents.

### [database](docs/sdks/database/README.md)

* [beginTransaction](docs/sdks/database/README.md#begintransaction) - Begin a transaction
* [commitTransaction](docs/sdks/database/README.md#committransaction) - Commit a Transaction
* [createBranch](docs/sdks/database/README.md#createbranch) - Create a database branch
* [deleteBranch](docs/sdks/database/README.md#deletebranch) - Delete a database branch
* [describe](docs/sdks/database/README.md#describe) - Describe database
* [listCollections](docs/sdks/database/README.md#listcollections) - List Collections
* [rollbackTransaction](docs/sdks/database/README.md#rollbacktransaction) - Rollback a transaction
* [tigrisListBranches](docs/sdks/database/README.md#tigrislistbranches) - List database branches

### [namespace](docs/sdks/namespace/README.md)

* [create](docs/sdks/namespace/README.md#create) - Creates a Namespace
* [get](docs/sdks/namespace/README.md#get) - Describe the details of all namespaces
* [getMetadata](docs/sdks/namespace/README.md#getmetadata) - Reads the Namespace Metadata
* [insertMetadata](docs/sdks/namespace/README.md#insertmetadata) - Inserts Namespace Metadata
* [list](docs/sdks/namespace/README.md#list) - Lists all Namespaces
* [updateMetadata](docs/sdks/namespace/README.md#updatemetadata) - Updates Namespace Metadata

### [project](docs/sdks/project/README.md)

* [create](docs/sdks/project/README.md#create) - Create Project
* [deleteProject](docs/sdks/project/README.md#deleteproject) - Delete Project and all resources under project
* [list](docs/sdks/project/README.md#list) - List Projects

### [search](docs/sdks/search/README.md)

* [createDocument](docs/sdks/search/README.md#createdocument) - Create a single document
* [createDocuments](docs/sdks/search/README.md#createdocuments) - Create multiple documents
* [deleteDocuments](docs/sdks/search/README.md#deletedocuments) - Delete documents by ids
* [deleteIndex](docs/sdks/search/README.md#deleteindex) - Deletes search index
* [findDocuments](docs/sdks/search/README.md#finddocuments) - Search Documents.
* [getDocuments](docs/sdks/search/README.md#getdocuments) - Get a single or multiple documents
* [getIndex](docs/sdks/search/README.md#getindex) - Get information about a search index
* [listIndexes](docs/sdks/search/README.md#listindexes) - List search indexes
* [queryDeleteDocuments](docs/sdks/search/README.md#querydeletedocuments) - Delete documents by query
* [replaceDocuments](docs/sdks/search/README.md#replacedocuments) - Create or replace documents in an index
* [updateDocuments](docs/sdks/search/README.md#updatedocuments) - Update documents in an index
* [updateIndex](docs/sdks/search/README.md#updateindex) - Creates or updates search index

### [system](docs/sdks/system/README.md)

* [getHealth](docs/sdks/system/README.md#gethealth) - Health Check
* [getServerInfo](docs/sdks/system/README.md#getserverinfo) - Information about the server
* [observabilityQuotaUsage](docs/sdks/system/README.md#observabilityquotausage) - Queries current namespace quota usage
* [queryQuotaLimits](docs/sdks/system/README.md#queryquotalimits) - Queries current namespace quota limits
* [queryTimeSeriesMetrics](docs/sdks/system/README.md#querytimeseriesmetrics) - Queries time series metrics

### [user](docs/sdks/user/README.md)

* [getMetadata](docs/sdks/user/README.md#getmetadata) - Reads the User Metadata
* [insertMetadata](docs/sdks/user/README.md#insertmetadata) - Inserts User Metadata
* [updateMetadata](docs/sdks/user/README.md#updatemetadata) - Updates User Metadata
<!-- End SDK Available Operations -->

### SDK Generated by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
