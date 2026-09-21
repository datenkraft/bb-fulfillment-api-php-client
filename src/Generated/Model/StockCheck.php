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
     * Number of the warehouse list created for the stock check. Only unique per `type`.
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
    - `inventory`: count the stock of the product (inventory list)
    - `expiration_date`: check the expiration dates of the stock (control list)
    - `ean`: check the EAN codes of the stock (control list)
    *
    * @var string
    */
    protected $type;
    /**
    * Status of the stock check:
    - `open`: not yet processed by the warehouse (a newly requested stock check is always `open`)
    - `finished`: processed by the warehouse
    - `nullified`: cancelled without processing
    *
    * @var string
    */
    protected $status;
    /**
     * The date (Y-m-d) the stock check was requested.
     *
     * @var \DateTime
     */
    protected $createdDate;
    /**
     * The date and time the stock check was finished or nullified. Format in ISO 8601. Null while the stock check is open.
     *
     * @var \DateTime|null
     */
    protected $completedAt;
    /**
     * Number of the warehouse list created for the stock check. Only unique per `type`.
     *
     * @return string
     */
    public function getStockCheckNumber(): string
    {
        return $this->stockCheckNumber;
    }
    /**
     * Number of the warehouse list created for the stock check. Only unique per `type`.
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
    - `inventory`: count the stock of the product (inventory list)
    - `expiration_date`: check the expiration dates of the stock (control list)
    - `ean`: check the EAN codes of the stock (control list)
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
    * Status of the stock check:
    - `open`: not yet processed by the warehouse (a newly requested stock check is always `open`)
    - `finished`: processed by the warehouse
    - `nullified`: cancelled without processing
    *
    * @return string
    */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * Status of the stock check:
    - `open`: not yet processed by the warehouse (a newly requested stock check is always `open`)
    - `finished`: processed by the warehouse
    - `nullified`: cancelled without processing
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
    /**
     * The date (Y-m-d) the stock check was requested.
     *
     * @return \DateTime
     */
    public function getCreatedDate(): \DateTime
    {
        return $this->createdDate;
    }
    /**
     * The date (Y-m-d) the stock check was requested.
     *
     * @param \DateTime $createdDate
     *
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * The date and time the stock check was finished or nullified. Format in ISO 8601. Null while the stock check is open.
     *
     * @return \DateTime|null
     */
    public function getCompletedAt(): ?\DateTime
    {
        return $this->completedAt;
    }
    /**
     * The date and time the stock check was finished or nullified. Format in ISO 8601. Null while the stock check is open.
     *
     * @param \DateTime|null $completedAt
     *
     * @return self
     */
    public function setCompletedAt(?\DateTime $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }
}