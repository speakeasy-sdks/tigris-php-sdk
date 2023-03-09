<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * CreateAppKeyRequest
 * Request creation of user app key
 */
class CreateAppKeyRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	public function __construct()
	{
		$this->description = null;
		$this->name = null;
	}
}
