<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * GetUserMetadataRequest
 * Request user metadata
 */
class GetUserMetadataRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('metadataKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadataKey = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $value = null;
    
	public function __construct()
	{
		$this->metadataKey = null;
		$this->value = null;
	}
}
