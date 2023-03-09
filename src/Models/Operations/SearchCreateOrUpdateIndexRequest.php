<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchCreateOrUpdateIndexRequest
{
    public SearchCreateOrUpdateIndexPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\CreateOrUpdateIndexRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\SearchCreateOrUpdateIndexPathParams();
		$this->request = new \tigris\core\Models\Shared\CreateOrUpdateIndexRequest();
	}
}
