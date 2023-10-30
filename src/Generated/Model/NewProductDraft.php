<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewProductDraft extends \ArrayObject
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
    * Product number to be used for the final product\
    This number is user defined, must be unique and has a maximum length (check maxLength field).\
    Please ensure that it does not contain any of the following character sequences:
    '/', '%2F', '%2f', '?', '%3F', '%3f',
    '#', '%23', '&', '%26'. Using any of these will result in the route not being handled correctly.
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
    * Product number to be used for the final product\
    This number is user defined, must be unique and has a maximum length (check maxLength field).\
    Please ensure that it does not contain any of the following character sequences:
    '/', '%2F', '%2f', '?', '%3F', '%3f',
    '#', '%23', '&', '%26'. Using any of these will result in the route not being handled correctly.
    *
    * @return string
    */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
    * Product number to be used for the final product\
    This number is user defined, must be unique and has a maximum length (check maxLength field).\
    Please ensure that it does not contain any of the following character sequences:
    '/', '%2F', '%2f', '?', '%3F', '%3f',
    '#', '%23', '&', '%26'. Using any of these will result in the route not being handled correctly.
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
}