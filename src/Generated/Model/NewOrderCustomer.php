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
     * The external id of the order customer.
     *
     * @var string|null
     */
    protected $externalCustomerId;
    /**
     * 
     *
     * @var OrderCustomerDeliveryAddress
     */
    protected $deliveryAddress;
    /**
     * The customer's phone number, preferably in the DIN 5008 format, like:+43 2236 123456-7890
     *
     * @var string|null
     */
    protected $phone;
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
     * The external id of the order customer.
     *
     * @return string|null
     */
    public function getExternalCustomerId() : ?string
    {
        return $this->externalCustomerId;
    }
    /**
     * The external id of the order customer.
     *
     * @param string|null $externalCustomerId
     *
     * @return self
     */
    public function setExternalCustomerId(?string $externalCustomerId) : self
    {
        $this->externalCustomerId = $externalCustomerId;
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
    /**
     * The customer's phone number, preferably in the DIN 5008 format, like:+43 2236 123456-7890
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * The customer's phone number, preferably in the DIN 5008 format, like:+43 2236 123456-7890
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
}