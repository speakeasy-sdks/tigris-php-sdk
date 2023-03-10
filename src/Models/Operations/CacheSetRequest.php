<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class CacheSetRequest
{
    public CacheSetPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\SetRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\CacheSetPathParams();
		$this->request = new \tigris\core\Models\Shared\SetRequest();
	}
}
