<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewOrderCustomer
{
    /**
     * 
     *
     * @var string
     */
    protected $gender;
    /**
     * The language code for any customer communications (ISO 639-1)
     *
     * @var string
     */
    protected $languageCode;
    /**
     * 
     *
     * @var OrderCustomerDeliveryAddress
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @return string
     */
    public function getGender() : string
    {
        return $this->gender;
    }
    /**
     * 
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender) : self
    {
        $this->gender = $gender;
        return $this;
    }
    /**
     * The language code for any customer communications (ISO 639-1)
     *
     * @return string
     */
    public function getLanguageCode() : string
    {
        return $this->languageCode;
    }
    /**
     * The language code for any customer communications (ISO 639-1)
     *
     * @param string $languageCode
     *
     * @return self
     */
    public function setLanguageCode(string $languageCode) : self
    {
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * 
     *
     * @return OrderCustomerDeliveryAddress
     */
    public function getDeliveryAddress() : OrderCustomerDeliveryAddress
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param OrderCustomerDeliveryAddress $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(OrderCustomerDeliveryAddress $deliveryAddress) : self
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
}