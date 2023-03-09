<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class CreateOrUpdateIndexRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('only_create')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $onlyCreate = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('project')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $project = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('schema')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $schema = null;
    
	public function __construct()
	{
		$this->name = null;
		$this->onlyCreate = null;
		$this->project = null;
		$this->schema = null;
	}
}
