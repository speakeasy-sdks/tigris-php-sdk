<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;
class CacheKeysRequest
{
    /**
     * optional - count of keys to return a stream response line.
     * 
     * @var ?int $count
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?int $count = null;
    
    /**
     * optional - cursor - skip this argument if no cursor is associated
     * 
     * @var ?int $cursor
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=cursor')]
    public ?int $cursor = null;
    
    /**
     * cache name
     * 
     * @var string $name
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=name')]
    public string $name;
    
    /**
     * optional key pattern
     * 
     * @var ?string $pattern
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pattern')]
    public ?string $pattern = null;
    
    /**
     * Tigris project name
     * 
     * @var string $project
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->count = null;
		$this->cursor = null;
		$this->name = "";
		$this->pattern = null;
		$this->project = "";
	}
}
