<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class DeliveryShipmentPackaging extends \ArrayObject
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
     * Height in cm
     *
     * @var float
     */
    protected $height;
    /**
     * Width in cm
     *
     * @var float
     */
    protected $width;
    /**
     * Depth in cm
     *
     * @var float
     */
    protected $depth;
    /**
     * Height in cm
     *
     * @return float
     */
    public function getHeight() : float
    {
        return $this->height;
    }
    /**
     * Height in cm
     *
     * @param float $height
     *
     * @return self
     */
    public function setHeight(float $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * Width in cm
     *
     * @return float
     */
    public function getWidth() : float
    {
        return $this->width;
    }
    /**
     * Width in cm
     *
     * @param float $width
     *
     * @return self
     */
    public function setWidth(float $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * Depth in cm
     *
     * @return float
     */
    public function getDepth() : float
    {
        return $this->depth;
    }
    /**
     * Depth in cm
     *
     * @param float $depth
     *
     * @return self
     */
    public function setDepth(float $depth) : self
    {
        $this->initialized['depth'] = true;
        $this->depth = $depth;
        return $this;
    }
}