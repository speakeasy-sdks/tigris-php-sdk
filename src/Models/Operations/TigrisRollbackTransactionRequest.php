<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisRollbackTransactionRequest
{
    public TigrisRollbackTransactionPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\RollbackTransactionRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisRollbackTransactionPathParams();
		$this->request = new \tigris\core\Models\Shared\RollbackTransactionRequest();
	}
}
