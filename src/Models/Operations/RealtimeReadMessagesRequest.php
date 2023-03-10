<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class RealtimeReadMessagesRequest
{
    public RealtimeReadMessagesPathParams $pathParams;
    
    public RealtimeReadMessagesQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\RealtimeReadMessagesPathParams();
		$this->queryParams = new \tigris\core\Models\Operations\RealtimeReadMessagesQueryParams();
	}
}
