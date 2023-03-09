<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class DeleteByQueryResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $count = null;
    
	public function __construct()
	{
		$this->count = null;
	}
}
