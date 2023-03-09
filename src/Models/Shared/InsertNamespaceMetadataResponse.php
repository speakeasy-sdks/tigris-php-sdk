<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * InsertNamespaceMetadataResponse
 * Insertion of namespace metadata response
 */
class InsertNamespaceMetadataResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('metadataKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadataKey = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('namespaceId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $namespaceId = null;
    
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
		$this->namespaceId = null;
		$this->value = null;
	}
}
