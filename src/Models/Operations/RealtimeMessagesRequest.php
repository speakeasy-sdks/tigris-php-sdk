<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class RealtimeMessagesRequest
{
    public RealtimeMessagesPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\MessagesRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\RealtimeMessagesPathParams();
		$this->request = new \tigris\core\Models\Shared\MessagesRequest();
	}
}
