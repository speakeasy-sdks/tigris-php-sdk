# SearchIndexRequest


## Fields

| Field                                                                                                                                                                                              | Type                                                                                                                                                                                               | Required                                                                                                                                                                                           | Description                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `collation`                                                                                                                                                                                        | [?\tigris\core\Models\Shared\Collation](../../Models/Shared/Collation.md)                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                 | A collation allows you to specify string comparison rules. Default is case-sensitive, to override it you can set this option to 'ci' that will apply to all the text fields in the filters.        |
| `excludeFields`                                                                                                                                                                                    | array<*string*>                                                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                                 | Array of document field names to exclude from results. `include_fields`, if specified, takes precedence over `exclude_fields`.                                                                     |
| `facet`                                                                                                                                                                                            | *?string*                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                 | Facet query to aggregate results on given fields. The field name for the facet search can be passed like this `{"brand": { "size": 10 }}` where the size controls the total facets for this field. |
| `filter`                                                                                                                                                                                           | *?string*                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                 | Filter stacks on top of query results to further narrow down the results. Similar to `ReadRequest.filter`                                                                                          |
| `includeFields`                                                                                                                                                                                    | array<*string*>                                                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                                 | Array of document field names to include in results. By default, all fields are included.                                                                                                          |
| `index`                                                                                                                                                                                            | *?string*                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                 | The index name to search documents from.                                                                                                                                                           |
| `page`                                                                                                                                                                                             | *?int*                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                 | Optionally can specify the page to retrieve. If page is set then only hits for this page is returned                                                                                               |
| `pageSize`                                                                                                                                                                                         | *?int*                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                 | Optionally can set the number of hits to be returned per page, default is 20.                                                                                                                      |
| `project`                                                                                                                                                                                          | *?string*                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                 | Project name whose db is under target to search documents from.                                                                                                                                    |
| `q`                                                                                                                                                                                                | *?string*                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                 | Query string for searching across text fields                                                                                                                                                      |
| `searchFields`                                                                                                                                                                                     | array<*string*>                                                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                                 | Array of fields to project search query against                                                                                                                                                    |
| `sort`                                                                                                                                                                                             | *?string*                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                 | Array of fields and corresponding sort orders to order the results `[{ "salary": "$desc" }]`                                                                                                       |