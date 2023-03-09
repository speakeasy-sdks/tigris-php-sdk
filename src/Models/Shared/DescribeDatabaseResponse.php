<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * DescribeDatabaseResponse
 * A detailed description of the database and all the associated collections. Description of the collection includes schema details as well.
 */
class DescribeDatabaseResponse
{
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('branches')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $branches = null;
    
    /**
     * @var ?array<\tigris\core\Models\Shared\CollectionDescription>
     */
    #[\JMS\Serializer\Annotation\SerializedName('collections')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\CollectionDescription>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $collections = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $size = null;
    
	public function __construct()
	{
		$this->branches = null;
		$this->collections = null;
		$this->metadata = null;
		$this->size = null;
	}
}
