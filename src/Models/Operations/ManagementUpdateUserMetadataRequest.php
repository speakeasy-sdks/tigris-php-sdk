<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class ManagementUpdateUserMetadataRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\UpdateUserMetadataRequest $updateUserMetadataRequest;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=metadataKey')]
    public string $metadataKey;
    
	public function __construct()
	{
		$this->updateUserMetadataRequest = new \tigris\core\Models\Shared\UpdateUserMetadataRequest();
		$this->metadataKey = "";
	}
}
