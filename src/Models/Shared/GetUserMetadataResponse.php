<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * GetUserMetadataResponse
 * User metadata response
 */
class GetUserMetadataResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('metadataKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadataKey = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('namespaceId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $namespaceId = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('userId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $userId = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $value = null;
    
	public function __construct()
	{
		$this->metadataKey = null;
		$this->namespaceId = null;
		$this->userId = null;
		$this->value = null;
	}
}
