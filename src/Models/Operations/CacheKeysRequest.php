<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class CacheKeysRequest
{
    public CacheKeysPathParams $pathParams;
    
    public CacheKeysQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\CacheKeysPathParams();
		$this->queryParams = new \tigris\core\Models\Operations\CacheKeysQueryParams();
	}
}
