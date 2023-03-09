<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;



class TigrisCommitTransactionResponse
{
    public ?\tigris\core\Models\Shared\CommitTransactionResponse $commitTransactionResponse = null;
    
    public string $contentType;
    
    public ?\tigris\core\Models\Shared\Status $status = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->commitTransactionResponse = null;
		$this->contentType = "";
		$this->status = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
