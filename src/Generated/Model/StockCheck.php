<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class StockCheck extends \ArrayObject
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
     * Number of the warehouse list created for the stock check
     *
     * @var string
     */
    protected $stockCheckNumber;
    /**
     * The product number the stock check was requested for
     *
     * @var string
     */
    protected $productNumber;
    /**
     * The shop the product belongs to
     *
     * @var string
     */
    protected $shopCode;
    /**
     * Kind of stock check performed in the warehouse:
     * - `inventory`: count the stock of the product (inventory list)
     * - `expiration_date`: check the expiration dates of the stock (control list)
     * - `ean`: check the EAN codes of the stock (control list)
     *
     * @var string
     */
    protected $type;
    /**
     * Status of the stock check. A newly requested stock check is always `open`.
     *
     * @var string
     */
    protected $status;
    /**
     * Number of the warehouse list created for the stock check
     *
     * @return string
     */
    public function getStockCheckNumber(): string
    {
        return $this->stockCheckNumber;
    }
    /**
     * Number of the warehouse list created for the stock check
     *
     * @param string $stockCheckNumber
     *
     * @return self
     */
    public function setStockCheckNumber(string $stockCheckNumber): self
    {
        $this->initialized['stockCheckNumber'] = true;
        $this->stockCheckNumber = $stockCheckNumber;
        return $this;
    }
    /**
     * The product number the stock check was requested for
     *
     * @return string
     */
    public function getProductNumber(): string
    {
        return $this->productNumber;
    }
    /**
     * The product number the stock check was requested for
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
     * The shop the product belongs to
     *
     * @return string
     */
    public function getShopCode(): string
    {
        return $this->shopCode;
    }
    /**
     * The shop the product belongs to
     *
     * @param string $shopCode
     *
     * @return self
     */
    public function setShopCode(string $shopCode): self
    {
        $this->initialized['shopCode'] = true;
        $this->shopCode = $shopCode;
        return $this;
    }
    /**
     * Kind of stock check performed in the warehouse:
     * - `inventory`: count the stock of the product (inventory list)
     * - `expiration_date`: check the expiration dates of the stock (control list)
     * - `ean`: check the EAN codes of the stock (control list)
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * Kind of stock check performed in the warehouse:
    - `inventory`: count the stock of the product (inventory list)
    - `expiration_date`: check the expiration dates of the stock (control list)
    - `ean`: check the EAN codes of the stock (control list)
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Status of the stock check. A newly requested stock check is always `open`.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Status of the stock check. A newly requested stock check is always `open`.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}