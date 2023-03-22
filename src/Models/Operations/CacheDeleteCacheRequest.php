<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class CacheDeleteCacheRequest
{
	
    public CacheDeleteCachePathParams $pathParams;
    
    /**
     * $request
     * 
     * @var array<string, mixed> $request
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public array $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\CacheDeleteCachePathParams();
		$this->request = [];
	}
}
