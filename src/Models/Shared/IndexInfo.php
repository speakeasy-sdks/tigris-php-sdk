<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class IndexInfo
{
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('schema')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $schema = null;
    
	public function __construct()
	{
		$this->name = null;
		$this->schema = null;
	}
}
