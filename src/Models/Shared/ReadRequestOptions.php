<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * ReadRequestOptions
 * Options that can be used to modify the results, for example "limit" to control the number of documents returned by the server.
 */
class ReadRequestOptions
{
    #[\JMS\Serializer\Annotation\SerializedName('collation')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\Collation')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Collation $collation = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('limit')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $limit = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('offset')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $offset = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('skip')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $skip = null;
    
	public function __construct()
	{
		$this->collation = null;
		$this->limit = null;
		$this->offset = null;
		$this->skip = null;
	}
}
