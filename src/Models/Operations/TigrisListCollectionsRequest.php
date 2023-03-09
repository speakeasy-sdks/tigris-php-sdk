<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class TigrisListCollectionsRequest
{
    public TigrisListCollectionsPathParams $pathParams;
    
    public TigrisListCollectionsQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\TigrisListCollectionsPathParams();
		$this->queryParams = new \tigris\core\Models\Operations\TigrisListCollectionsQueryParams();
	}
}
