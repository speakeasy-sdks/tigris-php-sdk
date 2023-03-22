<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class TigrisDeleteProjectPathParams
{
    /**
     * Delete Project with this name. <p></p>**Note**: Deletes all resources under this project. Use with caution.
     * 
     * @var string $project
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->project = "";
	}
}