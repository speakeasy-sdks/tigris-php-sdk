<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class RealtimePresenceRequest
{
    public RealtimePresencePathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\RealtimePresencePathParams();
	}
}
