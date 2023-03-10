<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisDropCollectionRequest
{
    public TigrisDropCollectionPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\DropCollectionRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisDropCollectionPathParams();
		$this->request = new \tigris\core\Models\Shared\DropCollectionRequest();
	}
}
