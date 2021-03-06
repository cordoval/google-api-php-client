<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace GoogleApi\Contrib;
use GoogleApi\Client;
use GoogleApi\Service\Model;
use GoogleApi\Service\Service;
use GoogleApi\Service\ServiceResource;

/**
   * The "accounts" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangebuyerService = new AdexchangebuyerService(...);
   *   $accounts = $adexchangebuyerService->accounts;
   *  </code>
   */
  class AccountsServiceResource extends ServiceResource {


    /**
     * Gets one account by ID. (accounts.get)
     *
     * @param int $id The account id
     * @param array $optParams Optional parameters.
     * @return Account
     */
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Account($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the authenticated user's list of accounts. (accounts.list)
     *
     * @param array $optParams Optional parameters.
     * @return AccountsList
     */
    public function listAccounts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new AccountsList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing account. This method supports patch semantics. (accounts.patch)
     *
     * @param int $id The account id
     * @param Account $postBody
     * @param array $optParams Optional parameters.
     * @return Account
     */
    public function patch($id, Account $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Account($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing account. (accounts.update)
     *
     * @param int $id The account id
     * @param Account $postBody
     * @param array $optParams Optional parameters.
     * @return Account
     */
    public function update($id, Account $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Account($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "creatives" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangebuyerService = new AdexchangebuyerService(...);
   *   $creatives = $adexchangebuyerService->creatives;
   *  </code>
   */
  class CreativesServiceResource extends ServiceResource {


    /**
     * Gets the status for a single creative. (creatives.get)
     *
     * @param int $accountId The id for the account that will serve this creative.
     * @param string $buyerCreativeId The buyer-specific id for this creative.
     * @param array $optParams Optional parameters.
     * @return Creative
     */
    public function get($accountId, $buyerCreativeId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'buyerCreativeId' => $buyerCreativeId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Creative($data);
      } else {
        return $data;
      }
    }
    /**
     * Submit a new creative. (creatives.insert)
     *
     * @param Creative $postBody
     * @param array $optParams Optional parameters.
     * @return Creative
     */
    public function insert(Creative $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Creative($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of the authenticated user's active creatives. (creatives.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string statusFilter When specified, only creatives having the given status are returned.
     * @opt_param string pageToken A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response. Optional.
     * @opt_param string maxResults Maximum number of entries returned on one result page. If not set, the default is 100. Optional.
     * @return CreativesList
     */
    public function listCreatives($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new CreativesList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "directDeals" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangebuyerService = new AdexchangebuyerService(...);
   *   $directDeals = $adexchangebuyerService->directDeals;
   *  </code>
   */
  class DirectDealsServiceResource extends ServiceResource {


    /**
     * Gets one direct deal by ID. (directDeals.get)
     *
     * @param string $id The direct deal id
     * @param array $optParams Optional parameters.
     * @return DirectDeal
     */
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new DirectDeal($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the authenticated user's list of direct deals. (directDeals.list)
     *
     * @param array $optParams Optional parameters.
     * @return DirectDealsList
     */
    public function listDirectDeals($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new DirectDealsList($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Adexchangebuyer (v1.2).
 *
 * <p>
 * Lets you manage your Ad Exchange Buyer account.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/ad-exchange/buyer-rest" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class AdexchangebuyerService extends Service {
  public $accounts;
  public $creatives;
  public $directDeals;
  /**
   * Constructs the internal representation of the Adexchangebuyer service.
   *
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->servicePath = 'adexchangebuyer/v1.2/';
    $this->version = 'v1.2';
    $this->serviceName = 'adexchangebuyer';

    $client->addService($this->serviceName, $this->version);
    $this->accounts = new AccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"patch": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"id": {"location": "path", "required": true, "type": "integer", "format": "int32"}}, "request": {"$ref": "Account"}, "response": {"$ref": "Account"}, "httpMethod": "PATCH", "path": "accounts/{id}", "id": "adexchangebuyer.accounts.patch"}, "list": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "id": "adexchangebuyer.accounts.list", "httpMethod": "GET", "path": "accounts", "response": {"$ref": "AccountsList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"id": {"location": "path", "required": true, "type": "integer", "format": "int32"}}, "request": {"$ref": "Account"}, "response": {"$ref": "Account"}, "httpMethod": "PUT", "path": "accounts/{id}", "id": "adexchangebuyer.accounts.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"id": {"location": "path", "required": true, "type": "integer", "format": "int32"}}, "response": {"$ref": "Account"}, "httpMethod": "GET", "path": "accounts/{id}", "id": "adexchangebuyer.accounts.get"}}}', true));
    $this->creatives = new CreativesServiceResource($this, $this->serviceName, 'creatives', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "request": {"$ref": "Creative"}, "id": "adexchangebuyer.creatives.insert", "httpMethod": "POST", "path": "creatives", "response": {"$ref": "Creative"}}, "list": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"statusFilter": {"enum": ["approved", "disapproved", "not_checked"], "type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "maximum": "1000", "minimum": "1", "location": "query", "type": "integer"}}, "id": "adexchangebuyer.creatives.list", "httpMethod": "GET", "path": "creatives", "response": {"$ref": "CreativesList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"buyerCreativeId": {"required": true, "type": "string", "location": "path"}, "accountId": {"location": "path", "required": true, "type": "integer", "format": "int32"}}, "response": {"$ref": "Creative"}, "httpMethod": "GET", "path": "creatives/{accountId}/{buyerCreativeId}", "id": "adexchangebuyer.creatives.get"}}}', true));
    $this->directDeals = new DirectDealsServiceResource($this, $this->serviceName, 'directDeals', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "id": "adexchangebuyer.directDeals.list", "httpMethod": "GET", "path": "directdeals", "response": {"$ref": "DirectDealsList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"id": {"location": "path", "required": true, "type": "string", "format": "int64"}}, "response": {"$ref": "DirectDeal"}, "httpMethod": "GET", "path": "directdeals/{id}", "id": "adexchangebuyer.directDeals.get"}}}', true));

  }
}

class Account extends Model {
  protected $__bidderLocationType = 'AccountBidderLocation';
  protected $__bidderLocationDataType = 'array';
  public $bidderLocation;
  public $cookieMatchingNid;
  public $cookieMatchingUrl;
  public $id;
  public $kind;
  public $maximumTotalQps;
  public function setBidderLocation(/* array(AccountBidderLocation) */ $bidderLocation) {
    $this->assertIsArray($bidderLocation, 'AccountBidderLocation', __METHOD__);
    $this->bidderLocation = $bidderLocation;
  }
  public function getBidderLocation() {
    return $this->bidderLocation;
  }
  public function setCookieMatchingNid($cookieMatchingNid) {
    $this->cookieMatchingNid = $cookieMatchingNid;
  }
  public function getCookieMatchingNid() {
    return $this->cookieMatchingNid;
  }
  public function setCookieMatchingUrl($cookieMatchingUrl) {
    $this->cookieMatchingUrl = $cookieMatchingUrl;
  }
  public function getCookieMatchingUrl() {
    return $this->cookieMatchingUrl;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMaximumTotalQps($maximumTotalQps) {
    $this->maximumTotalQps = $maximumTotalQps;
  }
  public function getMaximumTotalQps() {
    return $this->maximumTotalQps;
  }
}

class AccountBidderLocation extends Model {
  public $maximumQps;
  public $region;
  public $url;
  public function setMaximumQps($maximumQps) {
    $this->maximumQps = $maximumQps;
  }
  public function getMaximumQps() {
    return $this->maximumQps;
  }
  public function setRegion($region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class AccountsList extends Model {
  protected $__itemsType = 'Account';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(Account) */ $items) {
    $this->assertIsArray($items, 'Account', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Creative extends Model {
  public $HTMLSnippet;
  public $accountId;
  public $advertiserId;
  public $advertiserName;
  public $agencyId;
  public $attribute;
  public $buyerCreativeId;
  public $clickThroughUrl;
  protected $__disapprovalReasonsType = 'CreativeDisapprovalReasons';
  protected $__disapprovalReasonsDataType = 'array';
  public $disapprovalReasons;
  public $height;
  public $kind;
  public $productCategories;
  public $sensitiveCategories;
  public $status;
  public $vendorType;
  public $videoURL;
  public $width;
  public function setHTMLSnippet($HTMLSnippet) {
    $this->HTMLSnippet = $HTMLSnippet;
  }
  public function getHTMLSnippet() {
    return $this->HTMLSnippet;
  }
  public function setAccountId($accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setAdvertiserId(/* array(string) */ $advertiserId) {
    $this->assertIsArray($advertiserId, 'string', __METHOD__);
    $this->advertiserId = $advertiserId;
  }
  public function getAdvertiserId() {
    return $this->advertiserId;
  }
  public function setAdvertiserName($advertiserName) {
    $this->advertiserName = $advertiserName;
  }
  public function getAdvertiserName() {
    return $this->advertiserName;
  }
  public function setAgencyId($agencyId) {
    $this->agencyId = $agencyId;
  }
  public function getAgencyId() {
    return $this->agencyId;
  }
  public function setAttribute(/* array(int) */ $attribute) {
    $this->assertIsArray($attribute, 'int', __METHOD__);
    $this->attribute = $attribute;
  }
  public function getAttribute() {
    return $this->attribute;
  }
  public function setBuyerCreativeId($buyerCreativeId) {
    $this->buyerCreativeId = $buyerCreativeId;
  }
  public function getBuyerCreativeId() {
    return $this->buyerCreativeId;
  }
  public function setClickThroughUrl(/* array(string) */ $clickThroughUrl) {
    $this->assertIsArray($clickThroughUrl, 'string', __METHOD__);
    $this->clickThroughUrl = $clickThroughUrl;
  }
  public function getClickThroughUrl() {
    return $this->clickThroughUrl;
  }
  public function setDisapprovalReasons(/* array(CreativeDisapprovalReasons) */ $disapprovalReasons) {
    $this->assertIsArray($disapprovalReasons, 'CreativeDisapprovalReasons', __METHOD__);
    $this->disapprovalReasons = $disapprovalReasons;
  }
  public function getDisapprovalReasons() {
    return $this->disapprovalReasons;
  }
  public function setHeight($height) {
    $this->height = $height;
  }
  public function getHeight() {
    return $this->height;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setProductCategories(/* array(int) */ $productCategories) {
    $this->assertIsArray($productCategories, 'int', __METHOD__);
    $this->productCategories = $productCategories;
  }
  public function getProductCategories() {
    return $this->productCategories;
  }
  public function setSensitiveCategories(/* array(int) */ $sensitiveCategories) {
    $this->assertIsArray($sensitiveCategories, 'int', __METHOD__);
    $this->sensitiveCategories = $sensitiveCategories;
  }
  public function getSensitiveCategories() {
    return $this->sensitiveCategories;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setVendorType(/* array(int) */ $vendorType) {
    $this->assertIsArray($vendorType, 'int', __METHOD__);
    $this->vendorType = $vendorType;
  }
  public function getVendorType() {
    return $this->vendorType;
  }
  public function setVideoURL($videoURL) {
    $this->videoURL = $videoURL;
  }
  public function getVideoURL() {
    return $this->videoURL;
  }
  public function setWidth($width) {
    $this->width = $width;
  }
  public function getWidth() {
    return $this->width;
  }
}

class CreativeDisapprovalReasons extends Model {
  public $details;
  public $reason;
  public function setDetails(/* array(string) */ $details) {
    $this->assertIsArray($details, 'string', __METHOD__);
    $this->details = $details;
  }
  public function getDetails() {
    return $this->details;
  }
  public function setReason($reason) {
    $this->reason = $reason;
  }
  public function getReason() {
    return $this->reason;
  }
}

class CreativesList extends Model {
  protected $__itemsType = 'Creative';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setItems(/* array(Creative) */ $items) {
    $this->assertIsArray($items, 'Creative', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class DirectDeal extends Model {
  public $accountId;
  public $advertiser;
  public $currencyCode;
  public $endTime;
  public $fixedCpm;
  public $id;
  public $kind;
  public $privateExchangeMinCpm;
  public $sellerNetwork;
  public $startTime;
  public function setAccountId($accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setAdvertiser($advertiser) {
    $this->advertiser = $advertiser;
  }
  public function getAdvertiser() {
    return $this->advertiser;
  }
  public function setCurrencyCode($currencyCode) {
    $this->currencyCode = $currencyCode;
  }
  public function getCurrencyCode() {
    return $this->currencyCode;
  }
  public function setEndTime($endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setFixedCpm($fixedCpm) {
    $this->fixedCpm = $fixedCpm;
  }
  public function getFixedCpm() {
    return $this->fixedCpm;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPrivateExchangeMinCpm($privateExchangeMinCpm) {
    $this->privateExchangeMinCpm = $privateExchangeMinCpm;
  }
  public function getPrivateExchangeMinCpm() {
    return $this->privateExchangeMinCpm;
  }
  public function setSellerNetwork($sellerNetwork) {
    $this->sellerNetwork = $sellerNetwork;
  }
  public function getSellerNetwork() {
    return $this->sellerNetwork;
  }
  public function setStartTime($startTime) {
    $this->startTime = $startTime;
  }
  public function getStartTime() {
    return $this->startTime;
  }
}

class DirectDealsList extends Model {
  protected $__directDealsType = 'DirectDeal';
  protected $__directDealsDataType = 'array';
  public $directDeals;
  public $kind;
  public function setDirectDeals(/* array(DirectDeal) */ $directDeals) {
    $this->assertIsArray($directDeals, 'DirectDeal', __METHOD__);
    $this->directDeals = $directDeals;
  }
  public function getDirectDeals() {
    return $this->directDeals;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}
