<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class CommitTransactionResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
	public function __construct()
	{
		$this->status = null;
	}
}
