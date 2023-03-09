<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * Page
 * Pagination metadata for SearchResponse
 */
class Page
{
    #[\JMS\Serializer\Annotation\SerializedName('current')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $current = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $size = null;
    
	public function __construct()
	{
		$this->current = null;
		$this->size = null;
	}
}
