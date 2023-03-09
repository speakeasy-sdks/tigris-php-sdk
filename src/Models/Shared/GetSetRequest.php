<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class GetSetRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $value = null;
    
	public function __construct()
	{
		$this->value = null;
	}
}
