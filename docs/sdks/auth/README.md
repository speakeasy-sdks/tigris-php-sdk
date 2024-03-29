# Auth


## Overview

The auth section of API provides OAuth 2.0 APIs. Tigris supports pluggable OAuth provider. Pass the token in the headers for authentication, as an example `-H "Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6I"`(replace it with your token). All API requests must be made over HTTPS. Calls made over plain HTTP will fail. API requests without authentication will also fail.

### Available Operations

* [get](#get) - Access Token

## get

Endpoint for receiving access token from Tigris Server. The endpoint requires Grant Type(`grant_type`) which has
 two possible values <i>"REFRESH_TOKEN"</i> or <i>"CLIENT_CREDENTIALS"</i> based on which either Refresh token(`refresh_token`)
 needs to be set or client credentials(`client_id`, `client_secret`).

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->auth->get();

    if ($response->getAccessTokenResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\tigris\core\Models\Operations\AuthGetAccessTokenResponse](../../Models/Operations/AuthGetAccessTokenResponse.md)**

