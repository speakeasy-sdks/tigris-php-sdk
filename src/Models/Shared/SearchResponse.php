<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * SearchResponse - Response struct for search
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class SearchResponse
{
    /**
     * $facets
     * 
     * @var ?array<string, \tigris\core\Models\Shared\SearchFacet> $facets
     */
	#[\JMS\Serializer\Annotation\SerializedName('facets')]
    #[\JMS\Serializer\Annotation\Type('array<string, tigris\core\Models\Shared\SearchFacet>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $facets = null;
    
    /**
     * $hits
     * 
     * @var ?array<\tigris\core\Models\Shared\SearchHit> $hits
     */
	#[\JMS\Serializer\Annotation\SerializedName('hits')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\SearchHit>')]
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
