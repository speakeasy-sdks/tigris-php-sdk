<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class ListCachesResponse
{
    /**
     * @var ?array<\tigris\core\Models\Shared\CacheMetadata>
     */
    #[\JMS\Serializer\Annotation\SerializedName('caches')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\CacheMetadata>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $caches = null;
    
	public function __construct()
	{
		$this->caches = null;
	}
}
