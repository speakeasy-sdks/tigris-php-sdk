<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class ReadMessagesResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\Message')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Message $message = null;
    
	public function __construct()
	{
		$this->message = null;
	}
}
