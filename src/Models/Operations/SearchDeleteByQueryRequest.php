<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchDeleteByQueryRequest
{
    public SearchDeleteByQueryPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\DeleteByQueryRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\SearchDeleteByQueryPathParams();
		$this->request = new \tigris\core\Models\Shared\DeleteByQueryRequest();
	}
}
