<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * RollupFunction
 * Rollup function aggregates the slices of metrics returned by original query and lets you operate on the slices using aggregator and constructs the bigger slice of your choice of interval (specified in seconds).
 */
class RollupFunction
{
    #[\JMS\Serializer\Annotation\SerializedName('aggregator')]
    #[\JMS\Serializer\Annotation\Type('enum<tigris\core\Models\Shared\RollupFunctionAggregatorEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?RollupFunctionAggregatorEnum $aggregator = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('interval')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $interval = null;
    
	public function __construct()
	{
		$this->aggregator = null;
		$this->interval = null;
	}
}
