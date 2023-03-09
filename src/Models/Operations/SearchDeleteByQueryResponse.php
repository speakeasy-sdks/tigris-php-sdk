<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class SearchDeleteByQueryResponse
{
    public string $contentType;
    
    public ?\tigris\core\Models\Shared\DeleteByQueryResponse $deleteByQueryResponse = null;
    
    public ?\tigris\core\Models\Shared\Status $status = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->deleteByQueryResponse = null;
		$this->status = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
