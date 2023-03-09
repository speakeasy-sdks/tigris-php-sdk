<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * AdditionalFunction
 * Additional function to apply on metrics query
 */
class AdditionalFunction
{
    #[\JMS\Serializer\Annotation\SerializedName('rollup')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\RollupFunction')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?RollupFunction $rollup = null;
    
	public function __construct()
	{
		$this->rollup = null;
	}
}
