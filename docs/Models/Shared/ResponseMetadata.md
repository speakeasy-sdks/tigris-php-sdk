# ResponseMetadata

Has metadata related to the documents stored.


## Fields

| Field                                                                                            | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `createdAt`                                                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                    | :heavy_minus_sign:                                                                               | Time at which the document was inserted/replaced. Measured in nano-seconds since the Unix epoch. |
| `deletedAt`                                                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                    | :heavy_minus_sign:                                                                               | Time at which the document was deleted. Measured in nano-seconds since the Unix epoch.           |
| `updatedAt`                                                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                    | :heavy_minus_sign:                                                                               | Time at which the document was updated. Measured in nano-seconds since the Unix epoch.           |