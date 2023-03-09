<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchCreateRequest
{
    public SearchCreatePathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\CreateDocumentRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\SearchCreatePathParams();
		$this->request = new \tigris\core\Models\Shared\CreateDocumentRequest();
	}
}
