<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class SearchFacet
{
    /**
     * @var ?array<\tigris\core\Models\Shared\FacetCount>
     */
    #[\JMS\Serializer\Annotation\SerializedName('counts')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\FacetCount>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $counts = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('stats')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\FacetStats')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?FacetStats $stats = null;
    
	public function __construct()
	{
		$this->counts = null;
		$this->stats = null;
	}
}
