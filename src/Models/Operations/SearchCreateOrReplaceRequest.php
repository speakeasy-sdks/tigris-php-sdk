<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchCreateOrReplaceRequest
{
    public SearchCreateOrReplacePathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\CreateOrReplaceDocumentRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\SearchCreateOrReplacePathParams();
		$this->request = new \tigris\core\Models\Shared\CreateOrReplaceDocumentRequest();
	}
}
