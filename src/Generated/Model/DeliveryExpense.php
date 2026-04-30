<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class DeliveryExpense extends \ArrayObject
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
     * Code of the delivery service.
     *
     * @var string
     */
    protected $deliveryServiceCode;
    /**
     * the country code of your destination.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * @var list<DeliveryExpensePrice>
     */
    protected $price;
    /**
     * The weight in gram.
     *
     * @var int
     */
    protected $weight;
    /**
     * The height in mm.
     *
     * @var int
     */
    protected $height;
    /**
     * The length in mm.
     *
     * @var int
     */
    protected $length;
    /**
     * The width in mm.
     *
     * @var int
     */
    protected $width;
    /**
     * Code of the delivery service.
     *
     * @return string
     */
    public function getDeliveryServiceCode(): string
    {
        return $this->deliveryServiceCode;
    }
    /**
     * Code of the delivery service.
     *
     * @param string $deliveryServiceCode
     *
     * @return self
     */
    public function setDeliveryServiceCode(string $deliveryServiceCode): self
    {
        $this->initialized['deliveryServiceCode'] = true;
        $this->deliveryServiceCode = $deliveryServiceCode;
        return $this;
    }
    /**
     * the country code of your destination.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * the country code of your destination.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * @return list<DeliveryExpensePrice>
     */
    public function getPrice(): array
    {
        return $this->price;
    }
    /**
     * @param list<DeliveryExpensePrice> $price
     *
     * @return self
     */
    public function setPrice(array $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * The weight in gram.
     *
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }
    /**
     * The weight in gram.
     *
     * @param int $weight
     *
     * @return self
     */
    public function setWeight(int $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * The height in mm.
     *
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
    /**
     * The height in mm.
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * The length in mm.
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }
    /**
     * The length in mm.
     *
     * @param int $length
     *
     * @return self
     */
    public function setLength(int $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * The width in mm.
     *
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
    /**
     * The width in mm.
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
}