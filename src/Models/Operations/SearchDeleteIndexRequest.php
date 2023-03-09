<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchDeleteIndexRequest
{
    public SearchDeleteIndexPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\DeleteIndexRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\SearchDeleteIndexPathParams();
		$this->request = new \tigris\core\Models\Shared\DeleteIndexRequest();
	}
}
