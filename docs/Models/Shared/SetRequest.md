# SetRequest


## Fields

| Field                                              | Type                                               | Required                                           | Description                                        |
| -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- |
| `ex`                                               | *?int*                                             | :heavy_minus_sign:                                 | optional - ttl specific to this key in second      |
| `nx`                                               | *?bool*                                            | :heavy_minus_sign:                                 | set only if the key doesn't exist                  |
| `px`                                               | *?int*                                             | :heavy_minus_sign:                                 | optional - ttl specific to this key in millisecond |
| `value`                                            | *?string*                                          | :heavy_minus_sign:                                 | free form byte[] value                             |
| `xx`                                               | *?bool*                                            | :heavy_minus_sign:                                 | set only if the key exist                          |