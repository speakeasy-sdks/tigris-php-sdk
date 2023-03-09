<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class ListIndexesResponse
{
    /**
     * @var ?array<\tigris\core\Models\Shared\IndexInfo>
     */
    #[\JMS\Serializer\Annotation\SerializedName('indexes')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\IndexInfo>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $indexes = null;
    
	public function __construct()
	{
		$this->indexes = null;
	}
}
