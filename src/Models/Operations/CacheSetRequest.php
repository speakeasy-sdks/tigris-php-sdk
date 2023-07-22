<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class CacheSetRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\SetRequest $setRequest;
    
    /**
     * cache key
     * 
     * @var string $key
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=key')]
    public string $key;
    
    /**
     * cache name
     * 
     * @var string $name
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=name')]
    public string $name;
    
    /**
     * Tigris project name
     * 
     * @var string $project
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->setRequest = new \tigris\core\Models\Shared\SetRequest();
		$this->key = "";
		$this->name = "";
		$this->project = "";
	}
}
