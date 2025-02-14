<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseProductDraftDimensions extends \ArrayObject
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
     * Width of the product in cm
     *
     * @var float
     */
    protected $width;
    /**
     * Height of the product in cm
     *
     * @var float
     */
    protected $height;
    /**
     * Depth of the product in cm
     *
     * @var float
     */
    protected $depth;
    /**
     * Width of the product in cm
     *
     * @return float
     */
    public function getWidth() : float
    {
        return $this->width;
    }
    /**
     * Width of the product in cm
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
     * Height of the product in cm
     *
     * @return float
     */
    public function getHeight() : float
    {
        return $this->height;
    }
    /**
     * Height of the product in cm
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
     * Depth of the product in cm
     *
     * @return float
     */
    public function getDepth() : float
    {
        return $this->depth;
    }
    /**
     * Depth of the product in cm
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