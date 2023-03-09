<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * DeleteRequestOptions
 * Additional options for deleted requests.
 */
class DeleteRequestOptions
{
    #[\JMS\Serializer\Annotation\SerializedName('collation')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\Collation')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Collation $collation = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('limit')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $limit = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('write_options')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $writeOptions = null;
    
	public function __construct()
	{
		$this->collation = null;
		$this->limit = null;
		$this->writeOptions = null;
	}
}
