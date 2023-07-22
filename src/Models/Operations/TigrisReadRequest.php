<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class TigrisReadRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\ReadRequest $readRequest;
    
    /**
     * Collection name to read documents from.
     * 
     * @var string $collection
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=collection')]
    public string $collection;
    
    /**
     * Project name whose db is under target to read documents from.
     * 
     * @var string $project
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->readRequest = new \tigris\core\Models\Shared\ReadRequest();
		$this->collection = "";
		$this->project = "";
	}
}
