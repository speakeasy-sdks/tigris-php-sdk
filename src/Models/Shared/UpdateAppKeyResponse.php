<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * UpdateAppKeyResponse
 * Returns response for updating the app key description
 */
class UpdateAppKeyResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('updated_app_key')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\AppKey')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AppKey $updatedAppKey = null;
    
	public function __construct()
	{
		$this->updatedAppKey = null;
	}
}
