<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * RotateAppKeyRequest - Request rotation of an app key secret
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class RotateAppKeyRequest
{
    /**
     * app key id
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * project name
     * 
     * @var ?string $project
     */
	#[\JMS\Serializer\Annotation\SerializedName('project')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $project = null;
    
	public function __construct()
	{
		$this->id = null;
		$this->project = null;
	}
}
