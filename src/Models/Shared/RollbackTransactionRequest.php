<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * RollbackTransactionRequest
 * Rollback transaction with the given ID
 */
class RollbackTransactionRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
	public function __construct()
	{
		$this->branch = null;
	}
}
