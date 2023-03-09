<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class CreateOrUpdateCollectionRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('only_create')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $onlyCreate = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $options = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('schema')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $schema = null;
    
	public function __construct()
	{
		$this->branch = null;
		$this->onlyCreate = null;
		$this->options = null;
		$this->schema = null;
	}
}
