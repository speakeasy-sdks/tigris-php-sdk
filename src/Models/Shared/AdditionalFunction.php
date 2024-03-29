<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * AdditionalFunction - Additional function to apply on metrics query
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class AdditionalFunction
{
    /**
     * Rollup function aggregates the slices of metrics returned by original query and lets you operate on the slices using aggregator and constructs the bigger slice of your choice of interval (specified in seconds).
     * 
     * @var ?\tigris\core\Models\Shared\RollupFunction $rollup
     */
	#[\JMS\Serializer\Annotation\SerializedName('rollup')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\RollupFunction')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?RollupFunction $rollup = null;
    
	public function __construct()
	{
		$this->rollup = null;
	}
}
