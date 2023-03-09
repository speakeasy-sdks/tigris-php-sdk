<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class SearchMetadata
{
    #[\JMS\Serializer\Annotation\SerializedName('found')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $found = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('page')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\Page')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Page $page = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('total_pages')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $totalPages = null;
    
	public function __construct()
	{
		$this->found = null;
		$this->page = null;
		$this->totalPages = null;
	}
}
