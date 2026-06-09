<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseProductDraft extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
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
     * @var string
     */
    protected $ean;
    /**
     * The TARIC Code of the product
     *
     * @var string
     */
    protected $taricCode;
    /**
     * The purchase price for the product in EUR
     *
     * @var float
     */
    protected $supplierPurchasePriceEUR;
    /**
     * The gross list price of the product in EUR
     *
     * @var float
     */
    protected $listPriceEUR;
    /**
     * One of the available tax codes.
     * - default: Default tax rate (in e.g. Austria 20 %)
     * - reduced1: 1st reduced tax rate (in e.g. Austria 13 %)
     * - reduced2: 2nd reduced tax rate (in e.g. Austria 10 %)
     * - none: not taxable (0%)
     *
     * @var string
     */
    protected $taxCode = 'default';
    /**
     * Number of the supplier.\
     * Valid suppliers can be queried with a GET /supplier call
     *
     * @var string
     */
    protected $supplierNumber;
    /**
     * Number of the manufacturer.\
     * Valid manufacturers can be queried with a GET /manufacturer call
     *
     * @var string
     */
    protected $manufacturerNumber;
    /**
     * Number of the brand.\
     * Valid brands can be queried with a GET /brand call
     *
     * @var string
     */
    protected $brandNumber;
    /**
     * Dimensions of the product
     *
     * @var BaseProductDraftDimensions
     */
    protected $dimensions;
    /**
     * Minimum available stock level. \
     * "null" means no value is configured. "0" is a valid value and is distinct from "null":
     * - "null": not configured (cleared)
     * - "0": configured at zero units
     * - positive integer: configured at the given level
     *
     * @var int|null
     */
    protected $minAvailableStock;
    /**
     * Product number to be used for the final product
     *
     * @return string
     */
    public function getProductNumber(): string
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
    public function setProductNumber(string $productNumber): self
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
    public function getProductTitle(): string
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
    public function setProductTitle(string $productTitle): self
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
    public function getContentsAmount(): float
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
    public function setContentsAmount(float $contentsAmount): self
    {
        $this->initialized['contentsAmount'] = true;
        $this->contentsAmount = $contentsAmount;
        return $this;
    }
    /**
     * Weight of the product contents in gram
     *
     * @return int
     */
    public function getContentsWeightGram(): int
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
    public function setContentsWeightGram(int $contentsWeightGram): self
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
    public function getWeightGram(): int
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
    public function setWeightGram(int $weightGram): self
    {
        $this->initialized['weightGram'] = true;
        $this->weightGram = $weightGram;
        return $this;
    }
    /**
     * The EAN of the product
     *
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }
    /**
     * The EAN of the product
     *
     * @param string $ean
     *
     * @return self
     */
    public function setEan(string $ean): self
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
    public function getTaricCode(): string
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
    public function setTaricCode(string $taricCode): self
    {
        $this->initialized['taricCode'] = true;
        $this->taricCode = $taricCode;
        return $this;
    }
    /**
     * The purchase price for the product in EUR
     *
     * @return float
     */
    public function getSupplierPurchasePriceEUR(): float
    {
        return $this->supplierPurchasePriceEUR;
    }
    /**
     * The purchase price for the product in EUR
     *
     * @param float $supplierPurchasePriceEUR
     *
     * @return self
     */
    public function setSupplierPurchasePriceEUR(float $supplierPurchasePriceEUR): self
    {
        $this->initialized['supplierPurchasePriceEUR'] = true;
        $this->supplierPurchasePriceEUR = $supplierPurchasePriceEUR;
        return $this;
    }
    /**
     * The gross list price of the product in EUR
     *
     * @return float
     */
    public function getListPriceEUR(): float
    {
        return $this->listPriceEUR;
    }
    /**
     * The gross list price of the product in EUR
     *
     * @param float $listPriceEUR
     *
     * @return self
     */
    public function setListPriceEUR(float $listPriceEUR): self
    {
        $this->initialized['listPriceEUR'] = true;
        $this->listPriceEUR = $listPriceEUR;
        return $this;
    }
    /**
     * One of the available tax codes.
     * - default: Default tax rate (in e.g. Austria 20 %)
     * - reduced1: 1st reduced tax rate (in e.g. Austria 13 %)
     * - reduced2: 2nd reduced tax rate (in e.g. Austria 10 %)
     * - none: not taxable (0%)
     *
     * @return string
     */
    public function getTaxCode(): string
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
    public function setTaxCode(string $taxCode): self
    {
        $this->initialized['taxCode'] = true;
        $this->taxCode = $taxCode;
        return $this;
    }
    /**
     * Number of the supplier.\
     * Valid suppliers can be queried with a GET /supplier call
     *
     * @return string
     */
    public function getSupplierNumber(): string
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
    public function setSupplierNumber(string $supplierNumber): self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;
        return $this;
    }
    /**
     * Number of the manufacturer.\
     * Valid manufacturers can be queried with a GET /manufacturer call
     *
     * @return string
     */
    public function getManufacturerNumber(): string
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
    public function setManufacturerNumber(string $manufacturerNumber): self
    {
        $this->initialized['manufacturerNumber'] = true;
        $this->manufacturerNumber = $manufacturerNumber;
        return $this;
    }
    /**
     * Number of the brand.\
     * Valid brands can be queried with a GET /brand call
     *
     * @return string
     */
    public function getBrandNumber(): string
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
    public function setBrandNumber(string $brandNumber): self
    {
        $this->initialized['brandNumber'] = true;
        $this->brandNumber = $brandNumber;
        return $this;
    }
    /**
     * Dimensions of the product
     *
     * @return BaseProductDraftDimensions
     */
    public function getDimensions(): BaseProductDraftDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions of the product
     *
     * @param BaseProductDraftDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(BaseProductDraftDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Minimum available stock level. \
     * "null" means no value is configured. "0" is a valid value and is distinct from "null":
     * - "null": not configured (cleared)
     * - "0": configured at zero units
     * - positive integer: configured at the given level
     *
     * @return int|null
     */
    public function getMinAvailableStock(): ?int
    {
        return $this->minAvailableStock;
    }
    /**
    * Minimum available stock level. \
    "null" means no value is configured. "0" is a valid value and is distinct from "null":
    - "null": not configured (cleared)
    - "0": configured at zero units
    - positive integer: configured at the given level
    *
    * @param int|null $minAvailableStock
    *
    * @return self
    */
    public function setMinAvailableStock(?int $minAvailableStock): self
    {
        $this->initialized['minAvailableStock'] = true;
        $this->minAvailableStock = $minAvailableStock;
        return $this;
    }
}