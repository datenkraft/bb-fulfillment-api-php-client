<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Country extends \ArrayObject
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
     * Country code (ISO 3166-1 alpha-2)
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Country name
     *
     * @var string
     */
    protected $name;
    /**
     * Specifies whether or not a phone number is required when using a shipping address in this country
     *
     * @var bool
     */
    protected $phoneRequired;
    /**
     * Specifies whether or not customs clearance is necessary
     *
     * @var bool
     */
    protected $customsClearanceRequired;
    /**
     * 
     *
     * @var CountryProvinces[]|null
     */
    protected $provinces;
    /**
     * The currency code which should be used for orders to the country (ISO 4217)
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Country code (ISO 3166-1 alpha-2)
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Country code (ISO 3166-1 alpha-2)
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Country name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Country name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Specifies whether or not a phone number is required when using a shipping address in this country
     *
     * @return bool
     */
    public function getPhoneRequired() : bool
    {
        return $this->phoneRequired;
    }
    /**
     * Specifies whether or not a phone number is required when using a shipping address in this country
     *
     * @param bool $phoneRequired
     *
     * @return self
     */
    public function setPhoneRequired(bool $phoneRequired) : self
    {
        $this->initialized['phoneRequired'] = true;
        $this->phoneRequired = $phoneRequired;
        return $this;
    }
    /**
     * Specifies whether or not customs clearance is necessary
     *
     * @return bool
     */
    public function getCustomsClearanceRequired() : bool
    {
        return $this->customsClearanceRequired;
    }
    /**
     * Specifies whether or not customs clearance is necessary
     *
     * @param bool $customsClearanceRequired
     *
     * @return self
     */
    public function setCustomsClearanceRequired(bool $customsClearanceRequired) : self
    {
        $this->initialized['customsClearanceRequired'] = true;
        $this->customsClearanceRequired = $customsClearanceRequired;
        return $this;
    }
    /**
     * 
     *
     * @return CountryProvinces[]|null
     */
    public function getProvinces() : ?array
    {
        return $this->provinces;
    }
    /**
     * 
     *
     * @param CountryProvinces[]|null $provinces
     *
     * @return self
     */
    public function setProvinces(?array $provinces) : self
    {
        $this->initialized['provinces'] = true;
        $this->provinces = $provinces;
        return $this;
    }
    /**
     * The currency code which should be used for orders to the country (ISO 4217)
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The currency code which should be used for orders to the country (ISO 4217)
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
}