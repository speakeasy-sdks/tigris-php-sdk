<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * GetRTChannelsResponse - OK
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class GetRTChannelsResponse
{
    /**
     * $channels
     * 
     * @var ?array<\tigris\core\Models\Shared\ChannelMetadata> $channels
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
