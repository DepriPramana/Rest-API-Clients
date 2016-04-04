<?php
/**
 * PriceApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * PriceApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://localhost:15534');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return PriceApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * priceGetByTicker
     *
     * 
     *
     * @param string $apikey  (required)
     * @param string $ticker  (required)
     * @return \Swagger\Client\Model\Price[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function priceGetByTicker($apikey, $ticker)
    {
        list($response, $statusCode, $httpHeader) = $this->priceGetByTickerWithHttpInfo ($apikey, $ticker);
        return $response; 
    }


    /**
     * priceGetByTickerWithHttpInfo
     *
     * 
     *
     * @param string $apikey  (required)
     * @param string $ticker  (required)
     * @return Array of \Swagger\Client\Model\Price[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function priceGetByTickerWithHttpInfo($apikey, $ticker)
    {
        
        // verify the required parameter 'apikey' is set
        if ($apikey === null) {
            throw new \InvalidArgumentException('Missing the required parameter $apikey when calling priceGetByTicker');
        }
        // verify the required parameter 'ticker' is set
        if ($ticker === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ticker when calling priceGetByTicker');
        }
  
        // parse inputs
        $resourcePath = "/Price/{ticker}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'text/json', 'application/xml', 'text/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($apikey !== null) {
            $queryParams['apikey'] = $this->apiClient->getSerializer()->toQueryValue($apikey);
        }
        
        // path params
        
        if ($ticker !== null) {
            $resourcePath = str_replace(
                "{" . "ticker" . "}",
                $this->apiClient->getSerializer()->toPathValue($ticker),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Price[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Price[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Price[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * priceGet
     *
     * 
     *
     * @param string $apikey  (required)
     * @param string $ticker  (required)
     * @param \DateTime $date  (required)
     * @return \Swagger\Client\Model\Price
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function priceGet($apikey, $ticker, $date)
    {
        list($response, $statusCode, $httpHeader) = $this->priceGetWithHttpInfo ($apikey, $ticker, $date);
        return $response; 
    }


    /**
     * priceGetWithHttpInfo
     *
     * 
     *
     * @param string $apikey  (required)
     * @param string $ticker  (required)
     * @param \DateTime $date  (required)
     * @return Array of \Swagger\Client\Model\Price, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function priceGetWithHttpInfo($apikey, $ticker, $date)
    {
        
        // verify the required parameter 'apikey' is set
        if ($apikey === null) {
            throw new \InvalidArgumentException('Missing the required parameter $apikey when calling priceGet');
        }
        // verify the required parameter 'ticker' is set
        if ($ticker === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ticker when calling priceGet');
        }
        // verify the required parameter 'date' is set
        if ($date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $date when calling priceGet');
        }
  
        // parse inputs
        $resourcePath = "/Price/{ticker}/{date}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'text/json', 'application/xml', 'text/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($apikey !== null) {
            $queryParams['apikey'] = $this->apiClient->getSerializer()->toQueryValue($apikey);
        }
        
        // path params
        
        if ($ticker !== null) {
            $resourcePath = str_replace(
                "{" . "ticker" . "}",
                $this->apiClient->getSerializer()->toPathValue($ticker),
                $resourcePath
            );
        }// path params
        
        if ($date !== null) {
            $resourcePath = str_replace(
                "{" . "date" . "}",
                $this->apiClient->getSerializer()->toPathValue($date),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Price'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Price', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Price', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
