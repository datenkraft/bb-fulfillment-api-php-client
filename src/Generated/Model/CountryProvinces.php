<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class CountryProvinces extends \ArrayObject
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
     * The code of the province (ISO 3166-2)
     *
     * @var string
     */
    protected $provinceCode;
    /**
     * The name of the province
     *
     * @var string
     */
    protected $name;
    /**
     * The code of the province (ISO 3166-2)
     *
     * @return string
     */
    public function getProvinceCode() : string
    {
        return $this->provinceCode;
    }
    /**
     * The code of the province (ISO 3166-2)
     *
     * @param string $provinceCode
     *
     * @return self
     */
    public function setProvinceCode(string $provinceCode) : self
    {
        $this->initialized['provinceCode'] = true;
        $this->provinceCode = $provinceCode;
        return $this;
    }
    /**
     * The name of the province
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the province
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
}