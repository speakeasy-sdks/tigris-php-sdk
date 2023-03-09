<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class GetRTChannelsResponse
{
    /**
     * @var ?array<\tigris\core\Models\Shared\ChannelMetadata>
     */
    #[\JMS\Serializer\Annotation\SerializedName('channels')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\ChannelMetadata>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $channels = null;
    
	public function __construct()
	{
		$this->channels = null;
	}
}
