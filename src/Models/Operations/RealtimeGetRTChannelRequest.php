<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class RealtimeGetRTChannelRequest
{
    public RealtimeGetRTChannelPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \tigris\core\Models\Operations\RealtimeGetRTChannelPathParams();
	}
}
