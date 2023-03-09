<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class GetInfoResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('server_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $serverVersion = null;
    
	public function __construct()
	{
		$this->serverVersion = null;
	}
}
