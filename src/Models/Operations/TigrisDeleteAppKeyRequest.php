<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisDeleteAppKeyRequest
{
    public TigrisDeleteAppKeyPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\DeleteAppKeyRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisDeleteAppKeyPathParams();
		$this->request = new \tigris\core\Models\Shared\DeleteAppKeyRequest();
	}
}
