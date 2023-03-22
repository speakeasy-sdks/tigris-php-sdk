<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * UpdateResponse - OK
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class UpdateResponse
{
    /**
     * Has metadata related to the documents stored.
     * 
     * @var ?\tigris\core\Models\Shared\ResponseMetadata $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\ResponseMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ResponseMetadata $metadata = null;
    
    /**
     * Returns the number of documents modified.
     * 
     * @var ?int $modifiedCount
     */
	#[\JMS\Serializer\Annotation\SerializedName('modified_count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $modifiedCount = null;
    
    /**
     * an enum with value set as "updated".
     * 
     * @var ?string $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
	public function __construct()
	{
		$this->metadata = null;
		$this->modifiedCount = null;
		$this->status = null;
	}
}
