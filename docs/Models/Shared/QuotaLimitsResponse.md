# QuotaLimitsResponse

Contains current quota limits


## Fields

| Field                                    | Type                                     | Required                                 | Description                              |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| `readUnits`                              | *?int*                                   | :heavy_minus_sign:                       | Number of allowed read units per second  |
| `storageSize`                            | *?int*                                   | :heavy_minus_sign:                       | Maximum number of bytes allowed to store |
| `writeUnits`                             | *?int*                                   | :heavy_minus_sign:                       | Number of allowed write units per second |