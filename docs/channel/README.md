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
    $request->channel = 'modi';
    $request->project = 'qui';

    $response = $sdk->channel->get($request);

    if ($response->getRTChannelResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->channel = 'aliquid';
    $request->end = 'cupiditate';
    $request->event = 'quos';
    $request->limit = 20107;
    $request->project = 'magni';
    $request->sessionId = 'assumenda';
    $request->socketId = 'ipsam';
    $request->start = 'alias';

    $response = $sdk->channel->getMessages($request);

    if ($response->readMessagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->project = 'fugit';

    $response = $sdk->channel->list($request);

    if ($response->getRTChannelsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->channel = 'dolorum';
    $request->page = 569618;
    $request->pageSize = 270008;
    $request->project = 'facilis';

    $response = $sdk->channel->listSubscriptions($request);

    if ($response->listSubscriptionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->messagesRequest->channel = 'tempore';
    $request->messagesRequest->messages = [
        new Message(),
        new Message(),
    ];
    $request->messagesRequest->project = 'delectus';
    $request->channel = 'eum';
    $request->project = 'non';

    $response = $sdk->channel->pushMessages($request);

    if ($response->messagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->channel = 'eligendi';
    $request->project = 'sint';

    $response = $sdk->channel->realtimePresence($request);

    if ($response->presenceResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
