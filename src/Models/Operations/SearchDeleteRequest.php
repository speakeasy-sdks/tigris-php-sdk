<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchDeleteRequest
{
    public SearchDeletePathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\DeleteDocumentRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\SearchDeletePathParams();
		$this->request = new \tigris\core\Models\Shared\DeleteDocumentRequest();
	}
}
