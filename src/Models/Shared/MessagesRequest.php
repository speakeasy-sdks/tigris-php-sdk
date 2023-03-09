<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class MessagesRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('channel')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $channel = null;
    
    /**
     * @var ?array<\tigris\core\Models\Shared\Message>
     */
    #[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\Message>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messages = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('project')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $project = null;
    
	public function __construct()
	{
		$this->channel = null;
		$this->messages = null;
		$this->project = null;
	}
}
