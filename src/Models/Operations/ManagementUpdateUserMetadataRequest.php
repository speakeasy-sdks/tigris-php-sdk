<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class ManagementUpdateUserMetadataRequest
{
    public ManagementUpdateUserMetadataPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\UpdateUserMetadataRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\ManagementUpdateUserMetadataPathParams();
		$this->request = new \tigris\core\Models\Shared\UpdateUserMetadataRequest();
	}
}
