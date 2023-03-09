<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class CacheCreateCacheRequest
{
    public CacheCreateCachePathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\CreateCacheRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\CacheCreateCachePathParams();
		$this->request = new \tigris\core\Models\Shared\CreateCacheRequest();
	}
}
