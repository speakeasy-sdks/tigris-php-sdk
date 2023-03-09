<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class ListNamespacesResponse
{
    /**
     * @var ?array<\tigris\core\Models\Shared\NamespaceInfo>
     */
    #[\JMS\Serializer\Annotation\SerializedName('namespaces')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\NamespaceInfo>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $namespaces = null;
    
	public function __construct()
	{
		$this->namespaces = null;
	}
}
