# InsertRequest


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `branch`                                                                       | *?string*                                                                      | :heavy_minus_sign:                                                             | Optionally specify a database branch name to perform operation on              |
| `documents`                                                                    | array<[InsertRequestDocuments](../../models/shared/InsertRequestDocuments.md)> | :heavy_minus_sign:                                                             | Array of documents to insert. Each document is a JSON object.                  |
| `options`                                                                      | [?InsertRequestOptions](../../models/shared/InsertRequestOptions.md)           | :heavy_minus_sign:                                                             | additional options for insert requests.                                        |