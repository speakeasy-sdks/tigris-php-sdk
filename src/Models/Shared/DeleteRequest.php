<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


class DeleteRequest
{
    /**
     * Optionally specify a database branch name to perform operation on
     * 
     * @var ?string $branch
     */
	#[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
    /**
     * Delete documents which matching specified filter. A filter can simply be key, value where key is the field name and value would be the value for this field. Or a filter can be logical where two or more fields can be logically joined using $or and $and. A few examples of filter: <li> To delete a user document where the id has a value 1: ```{"id": 1 }``` <li> To delete all the user documents where the key "id" has a value 1 or 2 or 3: `{"$or": [{"id": 1}, {"id": 2}, {"id": 3}]}`
     * 
     * @var ?\tigris\core\Models\Shared\DeleteRequestFilter $filter
     */
	#[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\DeleteRequestFilter')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?DeleteRequestFilter $filter = null;
    
    /**
     * Additional options for deleted requests.
     * 
     * @var ?\tigris\core\Models\Shared\DeleteRequestOptions $options
     */
	#[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\DeleteRequestOptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?DeleteRequestOptions $options = null;
    
	public function __construct()
	{
		$this->branch = null;
		$this->filter = null;
		$this->options = null;
	}
}
