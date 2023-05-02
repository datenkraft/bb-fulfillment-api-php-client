<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderDeliveryCosts
{
    /**
    * The price value rounded to 2 decimals with a dot used as separator. Note: This price value refers to
    a single unit and is not an aggregated price value, which may be calculated by multiplying this price value by the
    corresponding item count.
    *
    * @var float
    */
    protected $value;
    /**
     * The price type
     *
     * @var string
     */
    protected $type;
    /**
     * The VAT in percent
     *
     * @var float
     */
    protected $vat;
    /**
     * The currency code (ISO 4217)
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
    * The price value rounded to 2 decimals with a dot used as separator. Note: This price value refers to
    a single unit and is not an aggregated price value, which may be calculated by multiplying this price value by the
    corresponding item count.
    *
    * @return float
    */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
    * The price value rounded to 2 decimals with a dot used as separator. Note: This price value refers to
    a single unit and is not an aggregated price value, which may be calculated by multiplying this price value by the
    corresponding item count.
    *
    * @param float $value
    *
    * @return self
    */
    public function setValue(float $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * The price type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The price type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The VAT in percent
     *
     * @return float
     */
    public function getVat() : float
    {
        return $this->vat;
    }
    /**
     * The VAT in percent
     *
     * @param float $vat
     *
     * @return self
     */
    public function setVat(float $vat) : self
    {
        $this->vat = $vat;
        return $this;
    }
    /**
     * The currency code (ISO 4217)
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The currency code (ISO 4217)
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}