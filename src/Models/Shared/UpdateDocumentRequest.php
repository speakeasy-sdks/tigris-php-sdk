<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class UpdateDocumentRequest
{
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('documents')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $documents = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('index')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $index = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('project')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $project = null;
    
	public function __construct()
	{
		$this->documents = null;
		$this->index = null;
		$this->project = null;
	}
}
