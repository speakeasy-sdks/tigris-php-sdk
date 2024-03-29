<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


class UpdateRequest
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
     * Fields contains set of fields with the values which need to be updated. Should be proper JSON object.
     * 
     * @var ?\tigris\core\Models\Shared\UpdateRequestFields $fields
     */
	#[\JMS\Serializer\Annotation\SerializedName('fields')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\UpdateRequestFields')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdateRequestFields $fields = null;
    
    /**
     * Update documents which matching specified filter. A filter can simply be key, value where key is the field name and value would be the value for this field. Or a filter can be logical where two or more fields can be logically joined using $or and $and. A few examples of filter: <li> To update a user document where the id has a value 1: ```{"id": 1 }``` <li> To update all the user documents where the key "id" has a value 1 or 2 or 3: `{"$or": [{"id": 1}, {"id": 2}, {"id": 3}]}`
     * 
     * @var ?\tigris\core\Models\Shared\UpdateRequestFilter $filter
     */
	#[\JMS\Serializer\Annotation\SerializedName('filter')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\UpdateRequestFilter')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdateRequestFilter $filter = null;
    
    /**
     * Additional options for update requests.
     * 
     * @var ?\tigris\core\Models\Shared\UpdateRequestOptions $options
     */
	#[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\UpdateRequestOptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdateRequestOptions $options = null;
    
	public function __construct()
	{
		$this->branch = null;
		$this->fields = null;
		$this->filter = null;
		$this->options = null;
	}
}
