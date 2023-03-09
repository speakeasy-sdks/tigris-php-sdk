<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * BeginTransactionRequest
 * Start new transaction in project specified by "project".
 */
class BeginTransactionRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $options = null;
    
	public function __construct()
	{
		$this->branch = null;
		$this->options = null;
	}
}
