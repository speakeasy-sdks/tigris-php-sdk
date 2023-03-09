<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class CreateNamespaceRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\CreateNamespaceRequest $request;
    
	public function __construct()
	{
		$this->request = new \tigris\core\Models\Shared\CreateNamespaceRequest();
	}
}
