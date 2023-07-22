<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;


class CacheSetResponse
{
	
    public string $contentType;
    
    /**
     * OK
     * 
     * @var ?\tigris\core\Models\Shared\SetResponse $setResponse
     */
	
    public ?\tigris\core\Models\Shared\SetResponse $setResponse = null;
    
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
		$this->setResponse = null;
		$this->status = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
