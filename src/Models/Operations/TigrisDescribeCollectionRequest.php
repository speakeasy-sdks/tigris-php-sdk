<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisDescribeCollectionRequest
{
    public TigrisDescribeCollectionPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\DescribeCollectionRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisDescribeCollectionPathParams();
		$this->request = new \tigris\core\Models\Shared\DescribeCollectionRequest();
	}
}
