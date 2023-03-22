<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class TigrisDeleteBranchPathParams
{
    /**
     * Name of the database branch to delete. <p></p>**Note**: `main` branch cannot be deleted, use DeleteProject instead
     * 
     * @var string $branch
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=branch')]
    public string $branch;
    
    /**
     * Delete a database branch in this project
     * 
     * @var string $project
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->branch = "";
		$this->project = "";
	}
}
