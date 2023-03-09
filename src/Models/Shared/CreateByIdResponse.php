<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class CreateByIdResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	public function __construct()
	{
		$this->id = null;
	}
}
