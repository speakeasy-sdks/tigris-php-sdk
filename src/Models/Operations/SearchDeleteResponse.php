<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class SearchDeleteResponse
{
    public string $contentType;
    
    public ?\tigris\core\Models\Shared\DeleteDocumentResponse $deleteDocumentResponse = null;
    
    public ?\tigris\core\Models\Shared\Status $status = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->deleteDocumentResponse = null;
		$this->status = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
