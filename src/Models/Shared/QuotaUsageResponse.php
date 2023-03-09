<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * QuotaUsageResponse
 * Contains current quota usage
 */
class QuotaUsageResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('ReadUnits')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $readUnits = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('ReadUnitsThrottled')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $readUnitsThrottled = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('StorageSize')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $storageSize = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('StorageSizeThrottled')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $storageSizeThrottled = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('WriteUnits')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $writeUnits = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('WriteUnitsThrottled')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $writeUnitsThrottled = null;
    
	public function __construct()
	{
		$this->readUnits = null;
		$this->readUnitsThrottled = null;
		$this->storageSize = null;
		$this->storageSizeThrottled = null;
		$this->writeUnits = null;
		$this->writeUnitsThrottled = null;
	}
}
