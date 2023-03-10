<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class ManagementGetUserMetadataRequest
{
    public ManagementGetUserMetadataPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\GetUserMetadataRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\ManagementGetUserMetadataPathParams();
		$this->request = new \tigris\core\Models\Shared\GetUserMetadataRequest();
	}
}
