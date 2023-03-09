<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * CreateAppKeyResponse
 * CreateAppKeyResponse returns created app keys
 */
class CreateAppKeyResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('created_app_key')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\AppKey')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AppKey $createdAppKey = null;
    
	public function __construct()
	{
		$this->createdAppKey = null;
	}
}
