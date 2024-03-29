<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * BeginTransactionResponse - Start transaction returns transaction context  which uniquely identifies the transaction
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class BeginTransactionResponse
{
    /**
     * Contains ID which uniquely identifies transaction This context is returned by BeginTransaction request and should be passed in the metadata (headers) of subsequent requests in order to run them in the context of the same transaction.
     * 
     * @var ?\tigris\core\Models\Shared\TransactionCtx $txCtx
     */
	#[\JMS\Serializer\Annotation\SerializedName('tx_ctx')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\TransactionCtx')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TransactionCtx $txCtx = null;
    
	public function __construct()
	{
		$this->txCtx = null;
	}
}
