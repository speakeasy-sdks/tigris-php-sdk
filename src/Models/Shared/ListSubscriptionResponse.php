<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class ListSubscriptionResponse
{
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('devices')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $devices = null;
    
	public function __construct()
	{
		$this->devices = null;
	}
}
