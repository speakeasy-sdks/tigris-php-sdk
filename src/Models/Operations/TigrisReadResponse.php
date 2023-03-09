<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class TigrisReadResponse
{
    public string $contentType;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?\tigris\core\Models\Shared\Status $status = null;
    
    public ?\tigris\core\Models\Shared\StreamingReadResponse $streamingReadResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->status = null;
		$this->streamingReadResponse = null;
	}
}
