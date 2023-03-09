<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class SearchListIndexesRequest
{
    public SearchListIndexesPathParams $pathParams;
    
    public SearchListIndexesQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\SearchListIndexesPathParams();
		$this->queryParams = new \tigris\core\Models\Operations\SearchListIndexesQueryParams();
	}
}
