<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class SearchHit
{
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $data = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\SearchHitMeta')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SearchHitMeta $metadata = null;
    
	public function __construct()
	{
		$this->data = null;
		$this->metadata = null;
	}
}
