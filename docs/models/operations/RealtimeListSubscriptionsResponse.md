# RealtimeListSubscriptionsResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `listSubscriptionResponse`                                                                                   | [?\tigris\core\Models\Shared\ListSubscriptionResponse](../../models/shared/ListSubscriptionResponse.md)      | :heavy_minus_sign:                                                                                           | OK                                                                                                           |
| `status`                                                                                                     | [?\tigris\core\Models\Shared\Status](../../models/shared/Status.md)                                          | :heavy_minus_sign:                                                                                           | Default error response                                                                                       |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |