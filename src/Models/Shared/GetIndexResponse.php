<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class GetIndexResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('index')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\IndexInfo')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?IndexInfo $index = null;
    
	public function __construct()
	{
		$this->index = null;
	}
}
