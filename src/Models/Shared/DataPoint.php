<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * DataPoint
 * Represents the data point in timeseries.
 */
class DataPoint
{
    #[\JMS\Serializer\Annotation\SerializedName('timestamp')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $timestamp = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $value = null;
    
	public function __construct()
	{
		$this->timestamp = null;
		$this->value = null;
	}
}
