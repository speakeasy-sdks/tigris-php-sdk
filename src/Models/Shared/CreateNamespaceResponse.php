<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class CreateNamespaceResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('namespace')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\NamespaceInfo')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?NamespaceInfo $namespace = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
	public function __construct()
	{
		$this->message = null;
		$this->namespace = null;
		$this->status = null;
	}
}
