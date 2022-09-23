<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Country
{
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
     * Specifies whether or not a phone number is required when using a shipping address in the country
     *
     * @var bool
     */
    protected $phoneRequired;
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
        $this->name = $name;
        return $this;
    }
    /**
     * Specifies whether or not a phone number is required when using a shipping address in the country
     *
     * @return bool
     */
    public function getPhoneRequired() : bool
    {
        return $this->phoneRequired;
    }
    /**
     * Specifies whether or not a phone number is required when using a shipping address in the country
     *
     * @param bool $phoneRequired
     *
     * @return self
     */
    public function setPhoneRequired(bool $phoneRequired) : self
    {
        $this->phoneRequired = $phoneRequired;
        return $this;
    }
}