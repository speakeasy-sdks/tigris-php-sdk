<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * BeginTransactionRequest - Start new transaction in project specified by "project".
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class BeginTransactionRequest
{
    /**
     * Optionally specify a project branch name to perform operation on
     * 
     * @var ?string $branch
     */
	#[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
    /**
     * Options that can be used to modify the transaction semantics.
     * 
     * @var ?\tigris\core\Models\Shared\TransactionOptions $options
     */
	#[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\TransactionOptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TransactionOptions $options = null;
    
	public function __construct()
	{
		$this->branch = null;
		$this->options = null;
	}
}
