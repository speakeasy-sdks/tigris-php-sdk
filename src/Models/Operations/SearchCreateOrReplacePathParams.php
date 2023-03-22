<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class SearchCreateOrReplacePathParams
{
    /**
     * index name where to create documents.
     * 
     * @var string $index
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=index')]
    public string $index;
    
    /**
     * Project name whose db is under target to insert documents.
     * 
     * @var string $project
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->index = "";
		$this->project = "";
	}
}
