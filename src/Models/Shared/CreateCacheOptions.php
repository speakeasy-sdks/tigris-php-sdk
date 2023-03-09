<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class CreateCacheOptions
{
    #[\JMS\Serializer\Annotation\SerializedName('ttl_ms')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $ttlMs = null;
    
	public function __construct()
	{
		$this->ttlMs = null;
	}
}
