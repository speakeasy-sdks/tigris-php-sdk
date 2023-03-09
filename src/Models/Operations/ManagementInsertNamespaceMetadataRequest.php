<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class ManagementInsertNamespaceMetadataRequest
{
    public ManagementInsertNamespaceMetadataPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\InsertNamespaceMetadataRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\ManagementInsertNamespaceMetadataPathParams();
		$this->request = new \tigris\core\Models\Shared\InsertNamespaceMetadataRequest();
	}
}
