<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * QuotaLimitsResponse
 * Contains current quota limits
 */
class QuotaLimitsResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('ReadUnits')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $readUnits = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('StorageSize')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $storageSize = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('WriteUnits')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $writeUnits = null;
    
	public function __construct()
	{
		$this->readUnits = null;
		$this->storageSize = null;
		$this->writeUnits = null;
	}
}
