<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * DeleteRequestOptions - Additional options for deleted requests.
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class DeleteRequestOptions
{
    /**
     * A collation allows you to specify string comparison rules. Default is case-sensitive, to override it you can set this option to 'ci' that will apply to all the text fields in the filters.
     * 
     * @var ?\tigris\core\Models\Shared\Collation $collation
     */
	#[\JMS\Serializer\Annotation\SerializedName('collation')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\Collation')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Collation $collation = null;
    
    /**
     * Limit the number of documents to be deleted
     * 
     * @var ?int $limit
     */
	#[\JMS\Serializer\Annotation\SerializedName('limit')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $limit = null;
    
    /**
     * Additional options to modify write requests.
     * 
     * @var ?\tigris\core\Models\Shared\WriteOptions $writeOptions
     */
	#[\JMS\Serializer\Annotation\SerializedName('write_options')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\WriteOptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?WriteOptions $writeOptions = null;
    
	public function __construct()
	{
		$this->collation = null;
		$this->limit = null;
		$this->writeOptions = null;
	}
}
