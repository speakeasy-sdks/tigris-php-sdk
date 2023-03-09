<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class TigrisUpdateAppKeyResponse
{
    public string $contentType;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?\tigris\core\Models\Shared\Status $status = null;
    
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
