<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ProductDraft extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Product number to be used for the final product
     *
     * @var string
     */
    protected $productNumber;
    /**
     * Title of the Product
     *
     * @var string
     */
    protected $productTitle;
    /**
     * Amount of the product contents
     *
     * @var float
     */
    protected $contentsAmount = 1;
    /**
    * Unit of the product contents ('stk' if no value is provided).\
    Valid units can be queried with a GET /product-unit call
    *
    * @var string
    */
    protected $contentsUnit = 'stk';
    /**
     * Weight of the product contents in gram
     *
     * @var int
     */
    protected $contentsWeightGram;
    /**
     * Total weight of the product in gram
     *
     * @var int
     */
    protected $weightGram;
    /**
     * The EAN of the product
     *
     * @var string|null
     */
    protected $ean;
    /**
     * The TARIC Code of the product
     *
     * @var string
     */
    protected $taricCode;
    /**
     * The suggested retail price for the product in EUR
     *
     * @var float
     */
    protected $suggestedRetailPriceEUR;
    /**
     * The net list price of the product in EUR
     *
     * @var float
     */
    protected $listPriceEUR;
    /**
    * One of the available tax codes.
    - default: Default tax rate (in e.g. Austria 20 %)
    - reduced1: 1st reduced tax rate (in e.g. Austria 13 %)
    - reduced2: 2nd reduced tax rate (in e.g. Austria 10 %)
    - none: not taxable (0%)
    *
    * @var string
    */
    protected $taxCode = 'default';
    /**
    * Number of the supplier.\
    Valid suppliers can be queried with a GET /supplier call
    *
    * @var string
    */
    protected $supplierNumber;
    /**
    * Number of the manufacturer.\
    Valid manufacturers can be queried with a GET /manufacturer call
    *
    * @var string
    */
    protected $manufacturerNumber;
    /**
    * Number of the brand.\
    Valid brands can be queried with a GET /brand call
    *
    * @var string
    */
    protected $brandNumber;
    /**
     * The shop to which the product belongs
     *
     * @var string
     */
    protected $shopCode;
    /**
     * The source of the product draft
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var string
     */
    protected $productDraftId;
    /**
    * Status of the product draft.\
    Available values:
    - pending: The product draft is subject to be checked by the steve team
    - accepted: The product draft is accepted and the product can be used in the /product endpoints
    - declined: The product draft is declined by the steve team
    *
    * @var string
    */
    protected $productDraftStatus;
    /**
     * Product number to be used for the final product
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * Product number to be used for the final product
     *
     * @param string $productNumber
     *
     * @return self
     */
    public function setProductNumber(string $productNumber) : self
    {
        $this->initialized['productNumber'] = true;
        $this->productNumber = $productNumber;
        return $this;
    }
    /**
     * Title of the Product
     *
     * @return string
     */
    public function getProductTitle() : string
    {
        return $this->productTitle;
    }
    /**
     * Title of the Product
     *
     * @param string $productTitle
     *
     * @return self
     */
    public function setProductTitle(string $productTitle) : self
    {
        $this->initialized['productTitle'] = true;
        $this->productTitle = $productTitle;
        return $this;
    }
    /**
     * Amount of the product contents
     *
     * @return float
     */
    public function getContentsAmount() : float
    {
        return $this->contentsAmount;
    }
    /**
     * Amount of the product contents
     *
     * @param float $contentsAmount
     *
     * @return self
     */
    public function setContentsAmount(float $contentsAmount) : self
    {
        $this->initialized['contentsAmount'] = true;
        $this->contentsAmount = $contentsAmount;
        return $this;
    }
    /**
    * Unit of the product contents ('stk' if no value is provided).\
    Valid units can be queried with a GET /product-unit call
    *
    * @return string
    */
    public function getContentsUnit() : string
    {
        return $this->contentsUnit;
    }
    /**
    * Unit of the product contents ('stk' if no value is provided).\
    Valid units can be queried with a GET /product-unit call
    *
    * @param string $contentsUnit
    *
    * @return self
    */
    public function setContentsUnit(string $contentsUnit) : self
    {
        $this->initialized['contentsUnit'] = true;
        $this->contentsUnit = $contentsUnit;
        return $this;
    }
    /**
     * Weight of the product contents in gram
     *
     * @return int
     */
    public function getContentsWeightGram() : int
    {
        return $this->contentsWeightGram;
    }
    /**
     * Weight of the product contents in gram
     *
     * @param int $contentsWeightGram
     *
     * @return self
     */
    public function setContentsWeightGram(int $contentsWeightGram) : self
    {
        $this->initialized['contentsWeightGram'] = true;
        $this->contentsWeightGram = $contentsWeightGram;
        return $this;
    }
    /**
     * Total weight of the product in gram
     *
     * @return int
     */
    public function getWeightGram() : int
    {
        return $this->weightGram;
    }
    /**
     * Total weight of the product in gram
     *
     * @param int $weightGram
     *
     * @return self
     */
    public function setWeightGram(int $weightGram) : self
    {
        $this->initialized['weightGram'] = true;
        $this->weightGram = $weightGram;
        return $this;
    }
    /**
     * The EAN of the product
     *
     * @return string|null
     */
    public function getEan() : ?string
    {
        return $this->ean;
    }
    /**
     * The EAN of the product
     *
     * @param string|null $ean
     *
     * @return self
     */
    public function setEan(?string $ean) : self
    {
        $this->initialized['ean'] = true;
        $this->ean = $ean;
        return $this;
    }
    /**
     * The TARIC Code of the product
     *
     * @return string
     */
    public function getTaricCode() : string
    {
        return $this->taricCode;
    }
    /**
     * The TARIC Code of the product
     *
     * @param string $taricCode
     *
     * @return self
     */
    public function setTaricCode(string $taricCode) : self
    {
        $this->initialized['taricCode'] = true;
        $this->taricCode = $taricCode;
        return $this;
    }
    /**
     * The suggested retail price for the product in EUR
     *
     * @return float
     */
    public function getSuggestedRetailPriceEUR() : float
    {
        return $this->suggestedRetailPriceEUR;
    }
    /**
     * The suggested retail price for the product in EUR
     *
     * @param float $suggestedRetailPriceEUR
     *
     * @return self
     */
    public function setSuggestedRetailPriceEUR(float $suggestedRetailPriceEUR) : self
    {
        $this->initialized['suggestedRetailPriceEUR'] = true;
        $this->suggestedRetailPriceEUR = $suggestedRetailPriceEUR;
        return $this;
    }
    /**
     * The net list price of the product in EUR
     *
     * @return float
     */
    public function getListPriceEUR() : float
    {
        return $this->listPriceEUR;
    }
    /**
     * The net list price of the product in EUR
     *
     * @param float $listPriceEUR
     *
     * @return self
     */
    public function setListPriceEUR(float $listPriceEUR) : self
    {
        $this->initialized['listPriceEUR'] = true;
        $this->listPriceEUR = $listPriceEUR;
        return $this;
    }
    /**
    * One of the available tax codes.
    - default: Default tax rate (in e.g. Austria 20 %)
    - reduced1: 1st reduced tax rate (in e.g. Austria 13 %)
    - reduced2: 2nd reduced tax rate (in e.g. Austria 10 %)
    - none: not taxable (0%)
    *
    * @return string
    */
    public function getTaxCode() : string
    {
        return $this->taxCode;
    }
    /**
    * One of the available tax codes.
    - default: Default tax rate (in e.g. Austria 20 %)
    - reduced1: 1st reduced tax rate (in e.g. Austria 13 %)
    - reduced2: 2nd reduced tax rate (in e.g. Austria 10 %)
    - none: not taxable (0%)
    *
    * @param string $taxCode
    *
    * @return self
    */
    public function setTaxCode(string $taxCode) : self
    {
        $this->initialized['taxCode'] = true;
        $this->taxCode = $taxCode;
        return $this;
    }
    /**
    * Number of the supplier.\
    Valid suppliers can be queried with a GET /supplier call
    *
    * @return string
    */
    public function getSupplierNumber() : string
    {
        return $this->supplierNumber;
    }
    /**
    * Number of the supplier.\
    Valid suppliers can be queried with a GET /supplier call
    *
    * @param string $supplierNumber
    *
    * @return self
    */
    public function setSupplierNumber(string $supplierNumber) : self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;
        return $this;
    }
    /**
    * Number of the manufacturer.\
    Valid manufacturers can be queried with a GET /manufacturer call
    *
    * @return string
    */
    public function getManufacturerNumber() : string
    {
        return $this->manufacturerNumber;
    }
    /**
    * Number of the manufacturer.\
    Valid manufacturers can be queried with a GET /manufacturer call
    *
    * @param string $manufacturerNumber
    *
    * @return self
    */
    public function setManufacturerNumber(string $manufacturerNumber) : self
    {
        $this->initialized['manufacturerNumber'] = true;
        $this->manufacturerNumber = $manufacturerNumber;
        return $this;
    }
    /**
    * Number of the brand.\
    Valid brands can be queried with a GET /brand call
    *
    * @return string
    */
    public function getBrandNumber() : string
    {
        return $this->brandNumber;
    }
    /**
    * Number of the brand.\
    Valid brands can be queried with a GET /brand call
    *
    * @param string $brandNumber
    *
    * @return self
    */
    public function setBrandNumber(string $brandNumber) : self
    {
        $this->initialized['brandNumber'] = true;
        $this->brandNumber = $brandNumber;
        return $this;
    }
    /**
     * The shop to which the product belongs
     *
     * @return string
     */
    public function getShopCode() : string
    {
        return $this->shopCode;
    }
    /**
     * The shop to which the product belongs
     *
     * @param string $shopCode
     *
     * @return self
     */
    public function setShopCode(string $shopCode) : self
    {
        $this->initialized['shopCode'] = true;
        $this->shopCode = $shopCode;
        return $this;
    }
    /**
     * The source of the product draft
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * The source of the product draft
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductDraftId() : string
    {
        return $this->productDraftId;
    }
    /**
     * 
     *
     * @param string $productDraftId
     *
     * @return self
     */
    public function setProductDraftId(string $productDraftId) : self
    {
        $this->initialized['productDraftId'] = true;
        $this->productDraftId = $productDraftId;
        return $this;
    }
    /**
    * Status of the product draft.\
    Available values:
    - pending: The product draft is subject to be checked by the steve team
    - accepted: The product draft is accepted and the product can be used in the /product endpoints
    - declined: The product draft is declined by the steve team
    *
    * @return string
    */
    public function getProductDraftStatus() : string
    {
        return $this->productDraftStatus;
    }
    /**
    * Status of the product draft.\
    Available values:
    - pending: The product draft is subject to be checked by the steve team
    - accepted: The product draft is accepted and the product can be used in the /product endpoints
    - declined: The product draft is declined by the steve team
    *
    * @param string $productDraftStatus
    *
    * @return self
    */
    public function setProductDraftStatus(string $productDraftStatus) : self
    {
        $this->initialized['productDraftStatus'] = true;
        $this->productDraftStatus = $productDraftStatus;
        return $this;
    }
}