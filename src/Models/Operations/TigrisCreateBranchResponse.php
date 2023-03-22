<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;


class TigrisCreateBranchResponse
{
	
    public string $contentType;
    
    /**
     * OK
     * 
     * @var ?\tigris\core\Models\Shared\CreateBranchResponse $createBranchResponse
     */
	
    public ?\tigris\core\Models\Shared\CreateBranchResponse $createBranchResponse = null;
    
    /**
     * Default error response
     * 
     * @var ?\tigris\core\Models\Shared\Status $status
     */
	
    public ?\tigris\core\Models\Shared\Status $status = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createBranchResponse = null;
		$this->status = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}