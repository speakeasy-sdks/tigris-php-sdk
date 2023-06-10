# DescribeDatabaseResponse

A detailed description of the database and all the associated collections. Description of the collection includes schema details as well.


## Fields

| Field                                                                                                         | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `branches`                                                                                                    | array<*string*>                                                                                               | :heavy_minus_sign:                                                                                            | List of all the branches in this database                                                                     |
| `collections`                                                                                                 | array<[CollectionDescription](../../models/shared/CollectionDescription.md)>                                  | :heavy_minus_sign:                                                                                            | A detailed description about all the collections. The description returns collection metadata and the schema. |
| `metadata`                                                                                                    | [?DatabaseMetadata](../../models/shared/DatabaseMetadata.md)                                                  | :heavy_minus_sign:                                                                                            | N/A                                                                                                           |
| `size`                                                                                                        | *?int*                                                                                                        | :heavy_minus_sign:                                                                                            | Sum of all the collections sizes present in this database                                                     |