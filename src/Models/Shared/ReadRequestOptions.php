<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * ReadRequestOptions - Options that can be used to modify the results, for example "limit" to control the number of documents returned by the server.
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class ReadRequestOptions
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
     * Limit the number of documents returned by the read operation.
     * 
     * @var ?int $limit
     */
	#[\JMS\Serializer\Annotation\SerializedName('limit')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $limit = null;
    
    /**
     * A cursor for use in pagination. The next streams will return documents after this offset.
     * 
     * @var ?string $offset
     */
	#[\JMS\Serializer\Annotation\SerializedName('offset')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $offset = null;
    
    /**
     * Number of documents to skip before starting to return resulting documents.
     * 
     * @var ?int $skip
     */
	#[\JMS\Serializer\Annotation\SerializedName('skip')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $skip = null;
    
	public function __construct()
	{
		$this->collation = null;
		$this->limit = null;
		$this->offset = null;
		$this->skip = null;
	}
}
