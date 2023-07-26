<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;


class AuthGetAccessTokenResponse
{
	
    public string $contentType;
    
    /**
     * OK
     * 
     * @var ?\tigris\core\Models\Shared\GetAccessTokenResponse $getAccessTokenResponse
     */
	
    public ?\tigris\core\Models\Shared\GetAccessTokenResponse $getAccessTokenResponse = null;
    
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
		$this->getAccessTokenResponse = null;
		$this->status = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
