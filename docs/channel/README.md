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
    $request->channel = 'eligendi';
    $request->project = 'sint';

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
    $request->end = 'provident';
    $request->event = 'necessitatibus';
    $request->limit = 572252;
    $request->project = 'officia';
    $request->sessionId = 'dolor';
    $request->socketId = 'debitis';
    $request->start = 'a';

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
    $request->project = 'dolorum';

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
    $request->channel = 'in';
    $request->page = 449198;
    $request->pageSize = 846409;
    $request->project = 'maiores';

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
    $request->messagesRequest->channel = 'rerum';
    $request->messagesRequest->messages = [
        new Message(),
    ];
    $request->messagesRequest->project = 'magnam';
    $request->channel = 'cumque';
    $request->project = 'facere';

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
    $request->channel = 'ea';
    $request->project = 'aliquid';

    $response = $sdk->channel->realtimePresence($request);

    if ($response->presenceResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
