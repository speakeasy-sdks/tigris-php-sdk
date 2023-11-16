<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * FacetStats - Additional stats for faceted field
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class FacetStats
{
    /**
     * Average of all values in a field. Only available for numeric fields
     * 
     * @var ?float $avg
     */
	#[\JMS\Serializer\Annotation\SerializedName('avg')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $avg = null;
    
    /**
     * Total number of values in a field
     * 
     * @var ?int $count
     */
	#[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $count = null;
    
    /**
     * Maximum of all values in a field. Only available for numeric fields
     * 
     * @var ?float $max
     */
	#[\JMS\Serializer\Annotation\SerializedName('max')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $max = null;
    
    /**
     * Minimum of all values in a field. Only available for numeric fields
     * 
     * @var ?float $min
     */
	#[\JMS\Serializer\Annotation\SerializedName('min')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $min = null;
    
    /**
     * Sum of all values in a field. Only available for numeric fields
     * 
     * @var ?float $sum
     */
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
