# SearchIndexResponse

Response struct for search


## Fields

| Field                                                                                       | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `facets`                                                                                    | array<string, [\tigris\core\Models\Shared\SearchFacet](../../Models/Shared/SearchFacet.md)> | :heavy_minus_sign:                                                                          | N/A                                                                                         |
| `hits`                                                                                      | array<[\tigris\core\Models\Shared\IndexDoc](../../Models/Shared/IndexDoc.md)>               | :heavy_minus_sign:                                                                          | N/A                                                                                         |
| `meta`                                                                                      | [?\tigris\core\Models\Shared\SearchMetadata](../../Models/Shared/SearchMetadata.md)         | :heavy_minus_sign:                                                                          | N/A                                                                                         |