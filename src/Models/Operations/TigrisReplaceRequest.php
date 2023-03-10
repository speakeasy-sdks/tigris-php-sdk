<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisReplaceRequest
{
    public TigrisReplacePathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\ReplaceRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisReplacePathParams();
		$this->request = new \tigris\core\Models\Shared\ReplaceRequest();
	}
}
