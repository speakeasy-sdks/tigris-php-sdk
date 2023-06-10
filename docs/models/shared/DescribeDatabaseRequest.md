# DescribeDatabaseRequest


## Fields

| Field                                                                                             | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `branch`                                                                                          | *?string*                                                                                         | :heavy_minus_sign:                                                                                | Optionally specify a database branch name to perform operation on                                 |
| `project`                                                                                         | *?string*                                                                                         | :heavy_minus_sign:                                                                                | Project name whose db is under target to get description.                                         |
| `schemaFormat`                                                                                    | *?string*                                                                                         | :heavy_minus_sign:                                                                                | Return schema in the requested format. Format can be JSON, Go, TypeScript, Java. Default is JSON. |