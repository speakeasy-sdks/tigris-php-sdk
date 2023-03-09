<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisCommitTransactionRequest
{
    public TigrisCommitTransactionPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\CommitTransactionRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisCommitTransactionPathParams();
		$this->request = new \tigris\core\Models\Shared\CommitTransactionRequest();
	}
}
