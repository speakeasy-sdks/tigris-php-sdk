<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


class DeleteByQueryRequest
{
    /**
     * A filter is required to delete matching documents. To delete document by id, you can pass the filter as follows ```{"id": "test"}```
     * 
     * @var ?string $filter
     */
	#[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $filter = null;
    
    /**
     * The index name of the documents that needs deletion.
     * 
     * @var ?string $index
     */
	#[\JMS\Serializer\Annotation\SerializedName('index')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $index = null;
    
    /**
     * The project name.
     * 
     * @var ?string $project
     */
	#[\JMS\Serializer\Annotation\SerializedName('project')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $project = null;
    
	public function __construct()
	{
		$this->filter = null;
		$this->index = null;
		$this->project = null;
	}
}
