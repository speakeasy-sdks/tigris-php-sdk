<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class KeysResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $cursor = null;
    
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('keys')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $keys = null;
    
	public function __construct()
	{
		$this->cursor = null;
		$this->keys = null;
	}
}
