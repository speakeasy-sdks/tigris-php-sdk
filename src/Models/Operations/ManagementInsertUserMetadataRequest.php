<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class ManagementInsertUserMetadataRequest
{
    public ManagementInsertUserMetadataPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\InsertUserMetadataRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\ManagementInsertUserMetadataPathParams();
		$this->request = new \tigris\core\Models\Shared\InsertUserMetadataRequest();
	}
}
