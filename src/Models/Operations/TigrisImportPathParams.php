<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class TigrisImportPathParams
{
    /**
     * Collection name where to import documents.
     * 
     * @var string $collection
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=collection')]
    public string $collection;
    
    /**
     * Project name whose db is under target to import documents.
     * 
     * @var string $project
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->collection = "";
		$this->project = "";
	}
}
