# TigrisListBranchesResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `listBranchesResponse`                                                                                       | [?\tigris\core\Models\Shared\ListBranchesResponse](../../models/shared/ListBranchesResponse.md)              | :heavy_minus_sign:                                                                                           | OK                                                                                                           |
| `status`                                                                                                     | [?\tigris\core\Models\Shared\Status](../../models/shared/Status.md)                                          | :heavy_minus_sign:                                                                                           | Default error response                                                                                       |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |