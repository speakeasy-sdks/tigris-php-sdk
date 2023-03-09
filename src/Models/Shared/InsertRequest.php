<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class InsertRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
    /**
     * @var ?array<array<string, mixed>>
     */
    #[\JMS\Serializer\Annotation\SerializedName('documents')]
    #[\JMS\Serializer\Annotation\Type('array<array<string, mixed>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $documents = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\InsertRequestOptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?InsertRequestOptions $options = null;
    
	public function __construct()
	{
		$this->branch = null;
		$this->documents = null;
		$this->options = null;
	}
}
