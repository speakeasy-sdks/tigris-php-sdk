<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


class ListCachesResponse
{
    /**
     * List of caches metadata
     * 
     * @var ?array<\tigris\core\Models\Shared\CacheMetadata> $caches
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
