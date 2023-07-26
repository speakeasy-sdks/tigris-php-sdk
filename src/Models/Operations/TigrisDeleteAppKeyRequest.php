<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class TigrisDeleteAppKeyRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\DeleteAppKeyRequest $deleteAppKeyRequest;
    
    /**
     * project name
     * 
     * @var string $project
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->deleteAppKeyRequest = new \tigris\core\Models\Shared\DeleteAppKeyRequest();
		$this->project = "";
	}
}
