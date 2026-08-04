<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class DeliveryShipmentPackagingMaterial extends \ArrayObject
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
    * Packaging code of the used packaging material.\
    Details of the packaging materials can be retrieved from the 'GET /packaging' endpoint.
    *
    * @var string
    */
    protected $code;
    /**
    * How the packaging material was used.
    - default: The outer packaging of the shipment.
    - nested: Additional packaging inside the shipment (e.g. ice packs).
    - stuffing: Stuffing material inside the shipment.
    *
    * @var string
    */
    protected $type;
    /**
     * How many units of the packaging material were used
     *
     * @var int
     */
    protected $count;
    /**
    * Packaging code of the used packaging material.\
    Details of the packaging materials can be retrieved from the 'GET /packaging' endpoint.
    *
    * @return string
    */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
    * Packaging code of the used packaging material.\
    Details of the packaging materials can be retrieved from the 'GET /packaging' endpoint.
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
    * How the packaging material was used.
    - default: The outer packaging of the shipment.
    - nested: Additional packaging inside the shipment (e.g. ice packs).
    - stuffing: Stuffing material inside the shipment.
    *
    * @return string
    */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * How the packaging material was used.
    - default: The outer packaging of the shipment.
    - nested: Additional packaging inside the shipment (e.g. ice packs).
    - stuffing: Stuffing material inside the shipment.
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
     * How many units of the packaging material were used
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * How many units of the packaging material were used
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
}