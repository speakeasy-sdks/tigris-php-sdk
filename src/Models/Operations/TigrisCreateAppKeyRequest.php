<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisCreateAppKeyRequest
{
    public TigrisCreateAppKeyPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\CreateAppKeyRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisCreateAppKeyPathParams();
		$this->request = new \tigris\core\Models\Shared\CreateAppKeyRequest();
	}
}
