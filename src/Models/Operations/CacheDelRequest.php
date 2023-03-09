<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class CacheDelRequest
{
    public CacheDelPathParams $pathParams;
    
    /**
     * @var array<string, mixed>
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public array $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\CacheDelPathParams();
		$this->request = [];
	}
}
