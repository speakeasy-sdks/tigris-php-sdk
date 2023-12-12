# Channel


## Overview

The realtime section provide APIs that can be used realtime operations.

### Available Operations

* [get](#get) - Get the details about a channel
* [getMessages](#getmessages) - Get all messages for a channel
* [list](#list) - Get all channels for your application project
* [listSubscriptions](#listsubscriptions) - Get the subscriptions details about a channel
* [pushMessages](#pushmessages) - push messages to a single channel
* [realtimePresence](#realtimepresence) - Presence about the channel

## get

Get the details about a channel

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RealtimeGetRTChannelRequest();
    $request->channel = 'string';
    $request->project = 'string';;

    $response = $sdk->channel->get($request);

    if ($response->getRTChannelResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\tigris\core\Models\Operations\RealtimeGetRTChannelRequest](../../Models/Operations/RealtimeGetRTChannelRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\tigris\core\Models\Operations\RealtimeGetRTChannelResponse](../../Models/Operations/RealtimeGetRTChannelResponse.md)**


## getMessages

Get all messages for a channel

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RealtimeReadMessagesRequest();
    $request->channel = 'string';
    $request->end = 'string';
    $request->event = 'string';
    $request->limit = 7235;
    $request->project = 'string';
    $request->sessionId = 'string';
    $request->socketId = 'string';
    $request->start = 'string';;

    $response = $sdk->channel->getMessages($request);

    if ($response->readMessagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\tigris\core\Models\Operations\RealtimeReadMessagesRequest](../../Models/Operations/RealtimeReadMessagesRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\tigris\core\Models\Operations\RealtimeReadMessagesResponse](../../Models/Operations/RealtimeReadMessagesResponse.md)**


## list

Get all channels for your application project

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RealtimeGetRTChannelsRequest();
    $request->project = 'string';;

    $response = $sdk->channel->list($request);

    if ($response->getRTChannelsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\tigris\core\Models\Operations\RealtimeGetRTChannelsRequest](../../Models/Operations/RealtimeGetRTChannelsRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\tigris\core\Models\Operations\RealtimeGetRTChannelsResponse](../../Models/Operations/RealtimeGetRTChannelsResponse.md)**


## listSubscriptions

Get the subscriptions details about a channel

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RealtimeListSubscriptionsRequest();
    $request->channel = 'string';
    $request->page = 994262;
    $request->pageSize = 462408;
    $request->project = 'string';;

    $response = $sdk->channel->listSubscriptions($request);

    if ($response->listSubscriptionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\tigris\core\Models\Operations\RealtimeListSubscriptionsRequest](../../Models/Operations/RealtimeListSubscriptionsRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\tigris\core\Models\Operations\RealtimeListSubscriptionsResponse](../../Models/Operations/RealtimeListSubscriptionsResponse.md)**


## pushMessages

push messages to a single channel

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RealtimeMessagesRequest();
    $request->messagesRequest = new Shared\MessagesRequest();
    $request->messagesRequest->channel = 'string';
    $request->messagesRequest->messages = [
        new Shared\Message(),
    ];
    $request->messagesRequest->project = 'string';
    $request->channel = 'string';
    $request->project = 'string';;

    $response = $sdk->channel->pushMessages($request);

    if ($response->messagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\tigris\core\Models\Operations\RealtimeMessagesRequest](../../Models/Operations/RealtimeMessagesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\tigris\core\Models\Operations\RealtimeMessagesResponse](../../Models/Operations/RealtimeMessagesResponse.md)**


## realtimePresence

Presence about the channel

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core;
use \tigris\core\Models\Shared;
use \tigris\core\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = core\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RealtimePresenceRequest();
    $request->channel = 'string';
    $request->project = 'string';;

    $response = $sdk->channel->realtimePresence($request);

    if ($response->presenceResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\tigris\core\Models\Operations\RealtimePresenceRequest](../../Models/Operations/RealtimePresenceRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\tigris\core\Models\Operations\RealtimePresenceResponse](../../Models/Operations/RealtimePresenceResponse.md)**

