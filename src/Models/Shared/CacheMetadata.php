<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class CacheMetadata
{
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	public function __construct()
	{
		$this->name = null;
	}
}
