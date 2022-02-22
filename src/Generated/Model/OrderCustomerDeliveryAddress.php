<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderCustomerDeliveryAddress
{
    /**
     * 
     *
     * @var string
     */
    protected $street;
    /**
     * 
     *
     * @var string
     */
    protected $streetNumber;
    /**
     * 
     *
     * @var string
     */
    protected $zipCode;
    /**
     * 
     *
     * @var string
     */
    protected $district;
    /**
     * 
     *
     * @var string
     */
    protected $city;
    /**
     * Province code (ISO 3166-2)
     *
     * @var string
     */
    protected $provinceCode;
    /**
     * Country code (ISO 3166-1 alpha-2)
     *
     * @var string
     */
    protected $countryCode;
    /**
     * 
     *
     * @var string
     */
    protected $nameLine1;
    /**
     * 
     *
     * @var string
     */
    protected $nameLine2;
    /**
     * 
     *
     * @return string
     */
    public function getStreet() : string
    {
        return $this->street;
    }
    /**
     * 
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street) : self
    {
        $this->street = $street;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStreetNumber() : string
    {
        return $this->streetNumber;
    }
    /**
     * 
     *
     * @param string $streetNumber
     *
     * @return self
     */
    public function setStreetNumber(string $streetNumber) : self
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }
    /**
     * 
     *
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode(string $zipCode) : self
    {
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDistrict() : string
    {
        return $this->district;
    }
    /**
     * 
     *
     * @param string $district
     *
     * @return self
     */
    public function setDistrict(string $district) : self
    {
        $this->district = $district;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Province code (ISO 3166-2)
     *
     * @return string
     */
    public function getProvinceCode() : string
    {
        return $this->provinceCode;
    }
    /**
     * Province code (ISO 3166-2)
     *
     * @param string $provinceCode
     *
     * @return self
     */
    public function setProvinceCode(string $provinceCode) : self
    {
        $this->provinceCode = $provinceCode;
        return $this;
    }
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
     * 
     *
     * @return string
     */
    public function getNameLine1() : string
    {
        return $this->nameLine1;
    }
    /**
     * 
     *
     * @param string $nameLine1
     *
     * @return self
     */
    public function setNameLine1(string $nameLine1) : self
    {
        $this->nameLine1 = $nameLine1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNameLine2() : string
    {
        return $this->nameLine2;
    }
    /**
     * 
     *
     * @param string $nameLine2
     *
     * @return self
     */
    public function setNameLine2(string $nameLine2) : self
    {
        $this->nameLine2 = $nameLine2;
        return $this;
    }
}