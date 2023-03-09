<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class GetRTChannelResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('channel')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $channel = null;
    
	public function __construct()
	{
		$this->channel = null;
	}
}
