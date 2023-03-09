<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class SearchRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
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
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('facet')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $facet = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('fields')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $fields = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $filter = null;
    
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('include_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $includeFields = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('page')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $page = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('page_size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $pageSize = null;
    
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
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('sort')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $sort = null;
    
	public function __construct()
	{
		$this->branch = null;
		$this->collation = null;
		$this->excludeFields = null;
		$this->facet = null;
		$this->fields = null;
		$this->filter = null;
		$this->includeFields = null;
		$this->page = null;
		$this->pageSize = null;
		$this->q = null;
		$this->searchFields = null;
		$this->sort = null;
	}
}
