<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ProductImageDetail extends \ArrayObject
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
     * The url of the image.
     *
     * @var string
     */
    protected $url;
    /**
     * Width of the image.
     *
     * @var int
     */
    protected $width;
    /**
     * Height of the image
     *
     * @var int
     */
    protected $height;
    /**
     * The url of the image.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * The url of the image.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Width of the image.
     *
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
    /**
     * Width of the image.
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
    /**
     * Height of the image
     *
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
    /**
     * Height of the image
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
}