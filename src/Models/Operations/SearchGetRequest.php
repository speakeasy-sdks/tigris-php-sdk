<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class SearchGetRequest
{
    public SearchGetPathParams $pathParams;
    
    public SearchGetQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\SearchGetPathParams();
		$this->queryParams = new \tigris\core\Models\Operations\SearchGetQueryParams();
	}
}
