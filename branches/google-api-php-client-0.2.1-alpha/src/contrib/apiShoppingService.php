<?php
/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * The Shopping service implementation
 *
 * Generated by http://code.google.com/p/google-api-php-client/
 * Generated from: https://www.googleapis.com/discovery/v0.3/describe/shopping/v1
 **/
class apiShoppingService {

  // Variables that the apiServiceResource implementation depends on
  private $serviceName = 'shopping';
  private $version = 'v1';
  private $restBasePath = '/shopping/search/v1/';
  private $rpcPath = '/rpc';
  private $io;
  // apiServiceResource's that are used internally
  private $products;

  /**
   * Constructs the internal service representations and does the auto-magic configuration required to drive them
   */
  public function __construct(apiClient $apiClient) {
    $apiClient->addService('shopping', 'v1');
    $this->io = $apiClient->getIo();
    $this->products = new apiServiceResource($this, $this->serviceName, 'products', json_decode('{"methods":{"get":{"restPath":"{source}\/products\/{accountId}\/{productIdType}\/{productId}","rpcMethod":"shopping.products.get","httpMethod":"GET","description":"Returns a single product","parameters":{"accountId":{"restParameterType":"path","required":true,"description":"Merchant center account id","type":"string"},"attributeFilter":{"restParameterType":"query","description":"Comma separated list of attributes to return","type":"string"},"categories.enabled":{"restParameterType":"query","description":"Whether to return category information","type":"boolean"},"categories.include":{"restParameterType":"query","description":"Category specification","type":"string"},"categories.useGcsConfig":{"restParameterType":"query","description":"This parameter is currently ignored","type":"boolean"},"debug.enableLogging":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"debug.enabled":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"debug.searchRequest":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"debug.searchResponse":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"productFields":{"restParameterType":"query","description":"Google Internal","type":"string"},"productId":{"restParameterType":"path","required":true,"description":"Id of product","type":"string"},"productIdType":{"restParameterType":"path","required":true,"description":"Type of productId","type":"string"},"recommendations.enabled":{"restParameterType":"query","description":"Whether to return recommendation information","type":"boolean"},"recommendations.include":{"restParameterType":"query","description":"Recommendation specification","type":"string"},"recommendations.useGcsConfig":{"restParameterType":"query","description":"This parameter is currently ignored","type":"boolean"},"source":{"restParameterType":"path","required":true,"description":"Query source","type":"string"},"taxonomy":{"restParameterType":"query","description":"Merchant taxonomy","type":"string"},"thumbnails":{"restParameterType":"query","description":"Thumbnail specification","type":"string"}},"parameterOrder":["source","accountId","productIdType","productId"],"response":{"$ref":"Product"}},"list":{"restPath":"{source}\/products","rpcMethod":"shopping.products.list","httpMethod":"GET","description":"Returns a list of products and content modules","parameters":{"attributeFilter":{"restParameterType":"query","description":"Comma separated list of attributes to return","type":"string"},"boostBy":{"restParameterType":"query","description":"Boosting specification","type":"string"},"categories.enabled":{"restParameterType":"query","description":"Whether to return category information","type":"boolean"},"categories.include":{"restParameterType":"query","description":"Category specification","type":"string"},"categories.useGcsConfig":{"restParameterType":"query","description":"This parameter is currently ignored","type":"boolean"},"channels":{"restParameterType":"query","description":"Channels specification","type":"string"},"country":{"restParameterType":"query","description":"Country restriction (ISO 3166)","type":"string"},"crowdBy":{"restParameterType":"query","description":"Crowding specification","type":"string"},"currency":{"restParameterType":"query","description":"Currency restriction (ISO 4217)","type":"string"},"debug.enableLogging":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"debug.enabled":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"debug.geocodeRequest":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"debug.geocodeResponse":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"debug.rdcRequest":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"debug.rdcResponse":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"debug.searchRequest":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"debug.searchResponse":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"facets.discover":{"restParameterType":"query","description":"Facets to discover","type":"string"},"facets.enabled":{"restParameterType":"query","description":"Whether to return facet information","type":"boolean"},"facets.include":{"restParameterType":"query","description":"Facets to include (applies when useGcsConfig == false)","type":"string"},"facets.useGcsConfig":{"restParameterType":"query","description":"Whether to return facet information as configured in the GCS account","type":"boolean"},"language":{"restParameterType":"query","description":"Language restriction (BCP 47)","type":"string"},"maxResults":{"restParameterType":"query","description":"Maximum number of results to return","type":"integer","minimum":"0","maximum":"4294967295"},"minAvailability":{"restParameterType":"query","type":"string","enum":["inStock","limited","outOfStock","unknown"],"enumDescriptions":["Only in stcok prodicts will be returned","Limited availability and in stock products will be returned","Out of stock, limited availability and in stock products will be returned","All products will be returned"]},"productFields":{"restParameterType":"query","description":"Google Internal","type":"string"},"promotions.enabled":{"restParameterType":"query","description":"Whether to return promotion information","type":"boolean"},"promotions.useGcsConfig":{"restParameterType":"query","description":"Whether to return promotion information as configured in the GCS account","type":"boolean"},"q":{"restParameterType":"query","description":"Search query","type":"string"},"rankBy":{"restParameterType":"query","description":"Ranking specification","type":"string"},"redirects.enabled":{"restParameterType":"query","description":"Whether to return redirect information","type":"boolean"},"redirects.useGcsConfig":{"restParameterType":"query","description":"Whether to return redirect information as configured in the GCS account","type":"boolean"},"relatedQueries.enabled":{"restParameterType":"query","description":"Whether to return related queries","type":"boolean"},"relatedQueries.useGcsConfig":{"restParameterType":"query","description":"This parameter is currently ignored","type":"boolean"},"restrictBy":{"restParameterType":"query","description":"Restriction specification","type":"string"},"safe":{"restParameterType":"query","description":"Whether safe search is enabled. Default: true","type":"boolean"},"sayt.enabled":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"sayt.useGcsConfig":{"restParameterType":"query","description":"Google Internal","type":"boolean"},"source":{"restParameterType":"path","required":true,"description":"Query source","type":"string"},"spelling.enabled":{"restParameterType":"query","description":"Whether to return spelling suggestions","type":"boolean"},"spelling.useGcsConfig":{"restParameterType":"query","description":"This parameter is currently ignored","type":"boolean"},"startIndex":{"restParameterType":"query","description":"Index (1-based) of first product to return","type":"integer","minimum":"0","maximum":"4294967295"},"taxonomy":{"restParameterType":"query","description":"Taxonomy name","type":"string"},"thumbnails":{"restParameterType":"query","description":"Image thumbnails specification","type":"string"},"useCase":{"restParameterType":"query","description":"One of CommerceSearchUseCase, ShoppingApiUseCase","type":"string"}},"parameterOrder":["source"],"response":{"$ref":"Products"}}}}', true));
  }

  /**
   * Returns a single product
   *
   * @param $accountId   string Merchant center account id
   * @param $productId   string Id of product
   * @param $productIdType   string Type of productId
   * @param $source   string Query source
   * @param $attributeFilter   string Comma separated list of attributes to return
   * @param $categories
   * @param $debug
   * @param $productFields   string Google Internal
   * @param $recommendations
   * @param $taxonomy   string Merchant taxonomy
   * @param $thumbnails   string Thumbnail specification
   */
  public function getProducts($accountId,
        $productId,
        $productIdType,
        $source,
        $attributeFilter = null,
        $categories,
        $debug,
        $productFields = null,
        $recommendations,
        $taxonomy = null,
        $thumbnails = null) {
    return $this->products->__call('get', array(array('accountId' => $accountId,
        'productId' => $productId,
        'productIdType' => $productIdType,
        'source' => $source,
        'attributeFilter' => $attributeFilter,
        'categories' => $categories,
        'debug' => $debug,
        'productFields' => $productFields,
        'recommendations' => $recommendations,
        'taxonomy' => $taxonomy,
        'thumbnails' => $thumbnails)));
  }

  /**
   * Returns a list of products and content modules
   *
   * @param $source   string Query source
   * @param $attributeFilter   string Comma separated list of attributes to return
   * @param $boostBy   string Boosting specification
   * @param $categories
   * @param $channels   string Channels specification
   * @param $country   string Country restriction (ISO 3166)
   * @param $crowdBy   string Crowding specification
   * @param $currency   string Currency restriction (ISO 4217)
   * @param $debug
   * @param $facets
   * @param $language   string Language restriction (BCP 47)
   * @param $maxResults   integer Maximum number of results to return
   * @param $minAvailability   string , valid values are:
   *                 inStock : Only in stcok prodicts will be returned
   *                 limited : Limited availability and in stock products will be returned
   *                 outOfStock : Out of stock, limited availability and in stock products will be returned
   *                 unknown : All products will be returned
   * @param $productFields   string Google Internal
   * @param $promotions
   * @param $q   string Search query
   * @param $rankBy   string Ranking specification
   * @param $redirects
   * @param $relatedQueries
   * @param $restrictBy   string Restriction specification
   * @param $safe   boolean Whether safe search is enabled. Default: true
   * @param $sayt
   * @param $spelling
   * @param $startIndex   integer Index (1-based) of first product to return
   * @param $taxonomy   string Taxonomy name
   * @param $thumbnails   string Image thumbnails specification
   * @param $useCase   string One of CommerceSearchUseCase, ShoppingApiUseCase
   */
  public function listProducts($source,
        $attributeFilter = null,
        $boostBy = null,
        $categories,
        $channels = null,
        $country = null,
        $crowdBy = null,
        $currency = null,
        $debug,
        $facets,
        $language = null,
        $maxResults = null,
        $minAvailability = null,
        $productFields = null,
        $promotions,
        $q = null,
        $rankBy = null,
        $redirects,
        $relatedQueries,
        $restrictBy = null,
        $safe = null,
        $sayt,
        $spelling,
        $startIndex = null,
        $taxonomy = null,
        $thumbnails = null,
        $useCase = null) {
    return $this->products->__call('list', array(array('source' => $source,
        'attributeFilter' => $attributeFilter,
        'boostBy' => $boostBy,
        'categories' => $categories,
        'channels' => $channels,
        'country' => $country,
        'crowdBy' => $crowdBy,
        'currency' => $currency,
        'debug' => $debug,
        'facets' => $facets,
        'language' => $language,
        'maxResults' => $maxResults,
        'minAvailability' => $minAvailability,
        'productFields' => $productFields,
        'promotions' => $promotions,
        'q' => $q,
        'rankBy' => $rankBy,
        'redirects' => $redirects,
        'relatedQueries' => $relatedQueries,
        'restrictBy' => $restrictBy,
        'safe' => $safe,
        'sayt' => $sayt,
        'spelling' => $spelling,
        'startIndex' => $startIndex,
        'taxonomy' => $taxonomy,
        'thumbnails' => $thumbnails,
        'useCase' => $useCase)));
  }

  /**
   * @return the $io
   */
  public function getIo() {
    return $this->io;
  }

  /**
   * @return the $version
   */
  public function getVersion() {
    return $this->version;
  }

  /**
   * @return the $restBasePath
   */
  public function getRestBasePath() {
    return $this->restBasePath;
  }

  /**
   * @return the $rpcPath
   */
  public function getRpcPath() {
    return $this->rpcPath;
  }
}
