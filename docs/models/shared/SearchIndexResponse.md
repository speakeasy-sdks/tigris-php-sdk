# SearchIndexResponse

Response struct for search


## Fields

| Field                                                                                       | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `facets`                                                                                    | array<string, [\tigris\core\Models\Shared\SearchFacet](../../models/shared/SearchFacet.md)> | :heavy_minus_sign:                                                                          | N/A                                                                                         |
| `hits`                                                                                      | array<[\tigris\core\Models\Shared\IndexDoc](../../models/shared/IndexDoc.md)>               | :heavy_minus_sign:                                                                          | N/A                                                                                         |
| `meta`                                                                                      | [?\tigris\core\Models\Shared\SearchMetadata](../../models/shared/SearchMetadata.md)         | :heavy_minus_sign:                                                                          | N/A                                                                                         |