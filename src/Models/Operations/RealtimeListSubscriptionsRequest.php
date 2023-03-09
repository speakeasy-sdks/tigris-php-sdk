<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class RealtimeListSubscriptionsRequest
{
    public RealtimeListSubscriptionsPathParams $pathParams;
    
    public RealtimeListSubscriptionsQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\RealtimeListSubscriptionsPathParams();
		$this->queryParams = new \tigris\core\Models\Operations\RealtimeListSubscriptionsQueryParams();
	}
}
