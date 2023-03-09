<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * SearchIndexResponse
 * Response struct for search
 */
class SearchIndexResponse
{
    /**
     * @var ?array<string, \tigris\core\Models\Shared\SearchFacet>
     */
    #[\JMS\Serializer\Annotation\SerializedName('facets')]
    #[\JMS\Serializer\Annotation\Type('array<string, tigris\core\Models\Shared\SearchFacet>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $facets = null;
    
    /**
     * @var ?array<\tigris\core\Models\Shared\IndexDoc>
     */
    #[\JMS\Serializer\Annotation\SerializedName('hits')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\IndexDoc>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $hits = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('meta')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\SearchMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SearchMetadata $meta = null;
    
	public function __construct()
	{
		$this->facets = null;
		$this->hits = null;
		$this->meta = null;
	}
}
