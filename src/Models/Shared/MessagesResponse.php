<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class MessagesResponse
{
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $ids = null;
    
	public function __construct()
	{
		$this->ids = null;
	}
}
