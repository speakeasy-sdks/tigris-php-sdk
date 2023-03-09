<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * RotateAppKeyResponse
 * RotateAppKeyResponse returns the new app key with rotated secret
 */
class RotateAppKeyResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('app_key')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\AppKey')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AppKey $appKey = null;
    
	public function __construct()
	{
		$this->appKey = null;
	}
}
