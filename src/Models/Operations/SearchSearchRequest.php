<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class SearchSearchRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\SearchIndexRequest $searchIndexRequest;
    
    /**
     * The index name to search documents from.
     * 
     * @var string $index
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=index')]
    public string $index;
    
    /**
     * Project name whose db is under target to search documents from.
     * 
     * @var string $project
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->searchIndexRequest = new \tigris\core\Models\Shared\SearchIndexRequest();
		$this->index = "";
		$this->project = "";
	}
}
