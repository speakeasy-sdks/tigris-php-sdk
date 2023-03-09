<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class ManagementUpdateNamespaceMetadataRequest
{
    public ManagementUpdateNamespaceMetadataPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\UpdateNamespaceMetadataRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataPathParams();
		$this->request = new \tigris\core\Models\Shared\UpdateNamespaceMetadataRequest();
	}
}
