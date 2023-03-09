<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class CreateDocumentResponse
{
    /**
     * @var ?array<\tigris\core\Models\Shared\DocStatus>
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\DocStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $status = null;
    
	public function __construct()
	{
		$this->status = null;
	}
}
