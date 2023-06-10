# SearchIndexResponse

Response struct for search


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `facets`                                                         | array<string, [SearchFacet](../../models/shared/SearchFacet.md)> | :heavy_minus_sign:                                               | N/A                                                              |
| `hits`                                                           | array<[IndexDoc](../../models/shared/IndexDoc.md)>               | :heavy_minus_sign:                                               | N/A                                                              |
| `meta`                                                           | [?SearchMetadata](../../models/shared/SearchMetadata.md)         | :heavy_minus_sign:                                               | N/A                                                              |