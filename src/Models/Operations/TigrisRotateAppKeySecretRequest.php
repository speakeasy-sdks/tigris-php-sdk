<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisRotateAppKeySecretRequest
{
    public TigrisRotateAppKeySecretPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\RotateAppKeyRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisRotateAppKeySecretPathParams();
		$this->request = new \tigris\core\Models\Shared\RotateAppKeyRequest();
	}
}
