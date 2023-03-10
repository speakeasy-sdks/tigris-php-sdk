<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class ManagementGetNamespaceMetadataRequest
{
    public ManagementGetNamespaceMetadataPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\GetNamespaceMetadataRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\ManagementGetNamespaceMetadataPathParams();
		$this->request = new \tigris\core\Models\Shared\GetNamespaceMetadataRequest();
	}
}
