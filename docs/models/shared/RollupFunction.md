# RollupFunction

Rollup function aggregates the slices of metrics returned by original query and lets you operate on the slices using aggregator and constructs the bigger slice of your choice of interval (specified in seconds).


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `aggregator`                                                                | [?\tigris\core\Models\Shared\Aggregator](../../models/shared/Aggregator.md) | :heavy_minus_sign:                                                          | N/A                                                                         |
| `interval`                                                                  | *?int*                                                                      | :heavy_minus_sign:                                                          | N/A                                                                         |