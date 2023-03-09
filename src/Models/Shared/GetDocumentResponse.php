<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class GetDocumentResponse
{
    /**
     * @var ?array<\tigris\core\Models\Shared\IndexDoc>
     */
    #[\JMS\Serializer\Annotation\SerializedName('documents')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\IndexDoc>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $documents = null;
    
	public function __construct()
	{
		$this->documents = null;
	}
}
