<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * TransactionCtx
 * Contains ID which uniquely identifies transaction This context is returned by BeginTransaction request and should be passed in the metadata (headers) of subsequent requests in order to run them in the context of the same transaction.
 */
class TransactionCtx
{
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('origin')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $origin = null;
    
	public function __construct()
	{
		$this->id = null;
		$this->origin = null;
	}
}
