<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Operations;


class TigrisUpdateAppKeyResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Default error response
     * 
     * @var ?\tigris\core\Models\Shared\Status $status
     */
	
    public ?\tigris\core\Models\Shared\Status $status = null;
    
    /**
     * OK
     * 
     * @var ?\tigris\core\Models\Shared\UpdateAppKeyResponse $updateAppKeyResponse
     */
	
    public ?\tigris\core\Models\Shared\UpdateAppKeyResponse $updateAppKeyResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->status = null;
		$this->updateAppKeyResponse = null;
	}
}