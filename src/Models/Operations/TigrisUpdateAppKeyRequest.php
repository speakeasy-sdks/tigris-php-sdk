<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisUpdateAppKeyRequest
{
    public TigrisUpdateAppKeyPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\UpdateAppKeyRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisUpdateAppKeyPathParams();
		$this->request = new \tigris\core\Models\Shared\UpdateAppKeyRequest();
	}
}
