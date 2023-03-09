<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class ListCollectionsResponse
{
    /**
     * @var ?array<\tigris\core\Models\Shared\CollectionInfo>
     */
    #[\JMS\Serializer\Annotation\SerializedName('collections')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\CollectionInfo>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $collections = null;
    
	public function __construct()
	{
		$this->collections = null;
	}
}
