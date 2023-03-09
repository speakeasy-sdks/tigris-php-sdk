<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class SearchIndexRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('collation')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\Collation')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Collation $collation = null;
    
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('exclude_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $excludeFields = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('facet')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $facet = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $filter = null;
    
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('include_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $includeFields = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('index')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $index = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('page')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $page = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('page_size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $pageSize = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('project')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $project = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('q')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $q = null;
    
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('search_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $searchFields = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('sort')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $sort = null;
    
	public function __construct()
	{
		$this->collation = null;
		$this->excludeFields = null;
		$this->facet = null;
		$this->filter = null;
		$this->includeFields = null;
		$this->index = null;
		$this->page = null;
		$this->pageSize = null;
		$this->project = null;
		$this->q = null;
		$this->searchFields = null;
		$this->sort = null;
	}
}
