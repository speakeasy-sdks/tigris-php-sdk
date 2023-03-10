<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisBeginTransactionRequest
{
    public TigrisBeginTransactionPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\BeginTransactionRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisBeginTransactionPathParams();
		$this->request = new \tigris\core\Models\Shared\BeginTransactionRequest();
	}
}
