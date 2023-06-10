# channel

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

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\RealtimeGetRTChannelRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RealtimeGetRTChannelRequest();
    $request->channel = 'quasi';
    $request->project = 'repudiandae';

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
| `$request`                                                                                                           | [\tigris\core\Models\Operations\RealtimeGetRTChannelRequest](../../models/operations/RealtimeGetRTChannelRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\tigris\core\Models\Operations\RealtimeGetRTChannelResponse](../../models/operations/RealtimeGetRTChannelResponse.md)**


## getMessages

Get all messages for a channel

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\RealtimeReadMessagesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RealtimeReadMessagesRequest();
    $request->channel = 'sint';
    $request->end = 'veritatis';
    $request->event = 'itaque';
    $request->limit = 277718;
    $request->project = 'enim';
    $request->sessionId = 'consequatur';
    $request->socketId = 'est';
    $request->start = 'quibusdam';

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
| `$request`                                                                                                           | [\tigris\core\Models\Operations\RealtimeReadMessagesRequest](../../models/operations/RealtimeReadMessagesRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\tigris\core\Models\Operations\RealtimeReadMessagesResponse](../../models/operations/RealtimeReadMessagesResponse.md)**


## list

Get all channels for your application project

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\RealtimeGetRTChannelsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RealtimeGetRTChannelsRequest();
    $request->project = 'explicabo';

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
| `$request`                                                                                                             | [\tigris\core\Models\Operations\RealtimeGetRTChannelsRequest](../../models/operations/RealtimeGetRTChannelsRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\tigris\core\Models\Operations\RealtimeGetRTChannelsResponse](../../models/operations/RealtimeGetRTChannelsResponse.md)**


## listSubscriptions

Get the subscriptions details about a channel

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\RealtimeListSubscriptionsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RealtimeListSubscriptionsRequest();
    $request->channel = 'deserunt';
    $request->page = 716327;
    $request->pageSize = 841386;
    $request->project = 'labore';

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
| `$request`                                                                                                                     | [\tigris\core\Models\Operations\RealtimeListSubscriptionsRequest](../../models/operations/RealtimeListSubscriptionsRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |


### Response

**[?\tigris\core\Models\Operations\RealtimeListSubscriptionsResponse](../../models/operations/RealtimeListSubscriptionsResponse.md)**


## pushMessages

push messages to a single channel

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\RealtimeMessagesRequest;
use \tigris\core\Models\Shared\MessagesRequest;
use \tigris\core\Models\Shared\Message;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RealtimeMessagesRequest();
    $request->messagesRequest = new MessagesRequest();
    $request->messagesRequest->channel = 'modi';
    $request->messagesRequest->messages = [
        new Message(),
    ];
    $request->messagesRequest->project = 'aliquid';
    $request->channel = 'cupiditate';
    $request->project = 'quos';

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
| `$request`                                                                                                   | [\tigris\core\Models\Operations\RealtimeMessagesRequest](../../models/operations/RealtimeMessagesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\tigris\core\Models\Operations\RealtimeMessagesResponse](../../models/operations/RealtimeMessagesResponse.md)**


## realtimePresence

Presence about the channel

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \tigris\core\SDK;
use \tigris\core\Models\Shared\Security;
use \tigris\core\Models\Operations\RealtimePresenceRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RealtimePresenceRequest();
    $request->channel = 'perferendis';
    $request->project = 'magni';

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
| `$request`                                                                                                   | [\tigris\core\Models\Operations\RealtimePresenceRequest](../../models/operations/RealtimePresenceRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?\tigris\core\Models\Operations\RealtimePresenceResponse](../../models/operations/RealtimePresenceResponse.md)**
