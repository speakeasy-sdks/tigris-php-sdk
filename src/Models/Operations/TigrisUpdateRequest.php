<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisUpdateRequest
{
    public TigrisUpdatePathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\UpdateRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisUpdatePathParams();
		$this->request = new \tigris\core\Models\Shared\UpdateRequest();
	}
}
