<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core;

class Channel 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
	
    /**
     * Get the details about a channel
     * 
     * @param \tigris\core\Models\Operations\RealtimeGetRTChannelRequest $request
     * @return \tigris\core\Models\Operations\RealtimeGetRTChannelResponse
     */
	public function get(
        \tigris\core\Models\Operations\RealtimeGetRTChannelRequest $request,
    ): \tigris\core\Models\Operations\RealtimeGetRTChannelResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/realtime/channels/{channel}', \tigris\core\Models\Operations\RealtimeGetRTChannelRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\RealtimeGetRTChannelResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getRTChannelResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\GetRTChannelResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->status = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\Status', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get all messages for a channel
     * 
     * @param \tigris\core\Models\Operations\RealtimeReadMessagesRequest $request
     * @return \tigris\core\Models\Operations\RealtimeReadMessagesResponse
     */
	public function getMessages(
        \tigris\core\Models\Operations\RealtimeReadMessagesRequest $request,
    ): \tigris\core\Models\Operations\RealtimeReadMessagesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/realtime/channels/{channel}/messages', \tigris\core\Models\Operations\RealtimeReadMessagesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\tigris\core\Models\Operations\RealtimeReadMessagesRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\RealtimeReadMessagesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->readMessagesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\ReadMessagesResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->status = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\Status', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get all channels for your application project
     * 
     * @param \tigris\core\Models\Operations\RealtimeGetRTChannelsRequest $request
     * @return \tigris\core\Models\Operations\RealtimeGetRTChannelsResponse
     */
	public function list(
        \tigris\core\Models\Operations\RealtimeGetRTChannelsRequest $request,
    ): \tigris\core\Models\Operations\RealtimeGetRTChannelsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/realtime/channels', \tigris\core\Models\Operations\RealtimeGetRTChannelsRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\RealtimeGetRTChannelsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getRTChannelsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\GetRTChannelsResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->status = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\Status', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get the subscriptions details about a channel
     * 
     * @param \tigris\core\Models\Operations\RealtimeListSubscriptionsRequest $request
     * @return \tigris\core\Models\Operations\RealtimeListSubscriptionsResponse
     */
	public function listSubscriptions(
        \tigris\core\Models\Operations\RealtimeListSubscriptionsRequest $request,
    ): \tigris\core\Models\Operations\RealtimeListSubscriptionsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/realtime/channels/{channel}/subscriptions', \tigris\core\Models\Operations\RealtimeListSubscriptionsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\tigris\core\Models\Operations\RealtimeListSubscriptionsRequest::class, $request, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\RealtimeListSubscriptionsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listSubscriptionResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\ListSubscriptionResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->status = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\Status', 'json');
            }
        }

        return $response;
    }
	
    /**
     * push messages to a single channel
     * 
     * @param \tigris\core\Models\Operations\RealtimeMessagesRequest $request
     * @return \tigris\core\Models\Operations\RealtimeMessagesResponse
     */
	public function pushMessages(
        \tigris\core\Models\Operations\RealtimeMessagesRequest $request,
    ): \tigris\core\Models\Operations\RealtimeMessagesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/realtime/channels/{channel}/messages', \tigris\core\Models\Operations\RealtimeMessagesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "messagesRequest", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\RealtimeMessagesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messagesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\MessagesResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->status = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\Status', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Presence about the channel
     * 
     * @param \tigris\core\Models\Operations\RealtimePresenceRequest $request
     * @return \tigris\core\Models\Operations\RealtimePresenceResponse
     */
	public function realtimePresence(
        \tigris\core\Models\Operations\RealtimePresenceRequest $request,
    ): \tigris\core\Models\Operations\RealtimePresenceResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/realtime/channels/{channel}/presence', \tigris\core\Models\Operations\RealtimePresenceRequest::class, $request);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\RealtimePresenceResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->presenceResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\PresenceResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->status = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\Status', 'json');
            }
        }

        return $response;
    }
}