<?php
/*
 * Copyright 2010 Google Inc.
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
 * The Urlshortener service implementation
 *
 * Generated by http://code.google.com/p/google-api-php-client/
 * Generated from: https://www.googleapis.com/discovery/v0.2beta1/describe/urlshortener/v1
 **/
class apiUrlshortenerService {

  // Variables that the apiServiceResource implementation depends on
  private $serviceName = 'urlshortener';
  private $version = 'v1';
  private $restBasePath = 'https://www.googleapis.com/urlshortener/v1/';
  private $rpcPath = 'https://www.googleapis.com/rpc';
  private $io;
  // apiServiceResource's that are used internally
  private $url;

  /**
   * Constructs the internal service representations and does the auto-magic configuration required to drive them
   */
  public function __construct(apiClient $apiClient) {
    $apiClient->addService('urlshortener', 'v1');
    $this->io = $apiClient->getIo();
    $this->url = new apiServiceResource($this, $this->serviceName, 'url', json_decode('{"methods":{"get":{"restPath":"url","rpcMethod":"urlshortener.url.get","httpMethod":"GET","parameters":{"projection":{"restParameterType":"query","required":false,"repeated":false},"shortUrl":{"restParameterType":"query","required":false,"repeated":false}}},"insert":{"restPath":"url","rpcMethod":"urlshortener.url.insert","httpMethod":"POST"},"list":{"restPath":"url\/history","rpcMethod":"urlshortener.url.list","httpMethod":"GET","parameters":{"projection":{"restParameterType":"query","required":false,"repeated":false},"start-token":{"restParameterType":"query","required":false,"repeated":false}}}}}', true));
  }

  /**
   * Implementation of the urlshortener.url.get method.
   * See: http://code.google.com/apis/buzz/v1/using_rest.html#urlshortener.url.get
   *
   * @param $projection optional
   * @param $shortUrl optional
   */
  public function getUrl($projection = null, $shortUrl = null) {
    return $this->url->__call('get', array(array('projection' => $projection, 'shortUrl' => $shortUrl)));
  }

  /**
   * Implementation of the urlshortener.url.insert method.
   * See: http://code.google.com/apis/buzz/v1/using_rest.html#urlshortener.url.insert
   *
   * @param $postBody required
   */
  public function insertUrl($postBody) {
    return $this->url->__call('insert', array(array('postBody' => $postBody)));
  }

  /**
   * Implementation of the urlshortener.url.list method.
   * See: http://code.google.com/apis/buzz/v1/using_rest.html#urlshortener.url.list
   *
   * @param $projection optional
   * @param $start_token optional
   */
  public function listUrl($projection = null, $start_token = null) {
    return $this->url->__call('list', array(array('projection' => $projection, 'start-token' => $start_token)));
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