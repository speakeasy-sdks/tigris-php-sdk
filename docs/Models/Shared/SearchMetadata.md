# SearchMetadata


## Fields

| Field                                                           | Type                                                            | Required                                                        | Description                                                     |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `found`                                                         | *?int*                                                          | :heavy_minus_sign:                                              | Total number of search results across all pages                 |
| `page`                                                          | [?\tigris\core\Models\Shared\Page](../../Models/Shared/Page.md) | :heavy_minus_sign:                                              | Pagination metadata for SearchResponse                          |
| `totalPages`                                                    | *?int*                                                          | :heavy_minus_sign:                                              | Number representing the total pages of results                  |