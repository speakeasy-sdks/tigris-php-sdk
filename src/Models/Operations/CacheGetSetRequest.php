<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class CacheGetSetRequest
{
    public CacheGetSetPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\GetSetRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\CacheGetSetPathParams();
		$this->request = new \tigris\core\Models\Shared\GetSetRequest();
	}
}
