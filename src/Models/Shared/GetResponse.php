<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class GetResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('expires_in_ms')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $expiresInMs = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $value = null;
    
	public function __construct()
	{
		$this->expiresInMs = null;
		$this->value = null;
	}
}
