<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;


class TigrisDeleteResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * OK
     * 
     * @var ?\tigris\core\Models\Shared\DeleteResponse $deleteResponse
     */
	
    public ?\tigris\core\Models\Shared\DeleteResponse $deleteResponse = null;
    
    /**
     * Default error response
     * 
     * @var ?\tigris\core\Models\Shared\Status $status
     */
	
    public ?\tigris\core\Models\Shared\Status $status = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->deleteResponse = null;
		$this->status = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
