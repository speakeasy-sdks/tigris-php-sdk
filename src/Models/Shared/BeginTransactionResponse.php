<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * BeginTransactionResponse
 * Start transaction returns transaction context  which uniquely identifies the transaction
 */
class BeginTransactionResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('tx_ctx')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\TransactionCtx')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TransactionCtx $txCtx = null;
    
	public function __construct()
	{
		$this->txCtx = null;
	}
}
