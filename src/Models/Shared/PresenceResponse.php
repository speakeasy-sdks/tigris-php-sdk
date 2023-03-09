<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class PresenceResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('response')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $response = null;
    
	public function __construct()
	{
		$this->response = null;
	}
}
