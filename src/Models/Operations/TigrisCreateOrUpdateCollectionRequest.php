<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisCreateOrUpdateCollectionRequest
{
    public TigrisCreateOrUpdateCollectionPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\CreateOrUpdateCollectionRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisCreateOrUpdateCollectionPathParams();
		$this->request = new \tigris\core\Models\Shared\CreateOrUpdateCollectionRequest();
	}
}
