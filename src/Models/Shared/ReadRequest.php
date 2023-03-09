<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class ReadRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('fields')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $fields = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $filter = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\ReadRequestOptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ReadRequestOptions $options = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('sort')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $sort = null;
    
	public function __construct()
	{
		$this->branch = null;
		$this->fields = null;
		$this->filter = null;
		$this->options = null;
		$this->sort = null;
	}
}
