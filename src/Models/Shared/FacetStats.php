<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * FacetStats
 * Additional stats for faceted field
 */
class FacetStats
{
    #[\JMS\Serializer\Annotation\SerializedName('avg')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $avg = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $count = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('max')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $max = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('min')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $min = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('sum')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $sum = null;
    
	public function __construct()
	{
		$this->avg = null;
		$this->count = null;
		$this->max = null;
		$this->min = null;
		$this->sum = null;
	}
}
