<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class PatchInboundDelivery extends \ArrayObject
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
     * Updated expected date of arrival in the warehouse (timezone CET/CEST)
     *
     * @var \DateTime
     */
    protected $expectedDeliveryDate;
    /**
     * Updated name of the inbound delivery. Must not be empty or consist only of whitespace characters.
     *
     * @var string
     */
    protected $inboundDeliveryName;
    /**
     * Updated note for the inbound delivery.
     *
     * @var string|null
     */
    protected $inboundDeliveryNote;
    /**
     * Products to update, add, or remove. Only listed products are affected; unlisted products remain unchanged.
     * - To update a product's announced count: include the product with the new announcedCount.
     * - To remove a product: include the product with announcedCount set to 0.
     * - To add a new product: include the product with a positive announcedCount.
     *
     * @var list<PatchInboundDeliveryProduct>
     */
    protected $products;
    /**
     * Updated expected date of arrival in the warehouse (timezone CET/CEST)
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryDate(): \DateTime
    {
        return $this->expectedDeliveryDate;
    }
    /**
     * Updated expected date of arrival in the warehouse (timezone CET/CEST)
     *
     * @param \DateTime $expectedDeliveryDate
     *
     * @return self
     */
    public function setExpectedDeliveryDate(\DateTime $expectedDeliveryDate): self
    {
        $this->initialized['expectedDeliveryDate'] = true;
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }
    /**
     * Updated name of the inbound delivery. Must not be empty or consist only of whitespace characters.
     *
     * @return string
     */
    public function getInboundDeliveryName(): string
    {
        return $this->inboundDeliveryName;
    }
    /**
     * Updated name of the inbound delivery. Must not be empty or consist only of whitespace characters.
     *
     * @param string $inboundDeliveryName
     *
     * @return self
     */
    public function setInboundDeliveryName(string $inboundDeliveryName): self
    {
        $this->initialized['inboundDeliveryName'] = true;
        $this->inboundDeliveryName = $inboundDeliveryName;
        return $this;
    }
    /**
     * Updated note for the inbound delivery.
     *
     * @return string|null
     */
    public function getInboundDeliveryNote(): ?string
    {
        return $this->inboundDeliveryNote;
    }
    /**
     * Updated note for the inbound delivery.
     *
     * @param string|null $inboundDeliveryNote
     *
     * @return self
     */
    public function setInboundDeliveryNote(?string $inboundDeliveryNote): self
    {
        $this->initialized['inboundDeliveryNote'] = true;
        $this->inboundDeliveryNote = $inboundDeliveryNote;
        return $this;
    }
    /**
     * Products to update, add, or remove. Only listed products are affected; unlisted products remain unchanged.
     * - To update a product's announced count: include the product with the new announcedCount.
     * - To remove a product: include the product with announcedCount set to 0.
     * - To add a new product: include the product with a positive announcedCount.
     *
     * @return list<PatchInboundDeliveryProduct>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
    * Products to update, add, or remove. Only listed products are affected; unlisted products remain unchanged.
    - To update a product's announced count: include the product with the new announcedCount.
    - To remove a product: include the product with announcedCount set to 0.
    - To add a new product: include the product with a positive announcedCount.
    *
    * @param list<PatchInboundDeliveryProduct> $products
    *
    * @return self
    */
    public function setProducts(array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
}