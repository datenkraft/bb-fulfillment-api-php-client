<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ProductImage extends \ArrayObject
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
     * 
     *
     * @var ProductImageDetail
     */
    protected $detail;
    /**
     * 
     *
     * @var ProductImageDetail
     */
    protected $thumbnail;
    /**
     * 
     *
     * @return ProductImageDetail
     */
    public function getDetail(): ProductImageDetail
    {
        return $this->detail;
    }
    /**
     * 
     *
     * @param ProductImageDetail $detail
     *
     * @return self
     */
    public function setDetail(ProductImageDetail $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;
        return $this;
    }
    /**
     * 
     *
     * @return ProductImageDetail
     */
    public function getThumbnail(): ProductImageDetail
    {
        return $this->thumbnail;
    }
    /**
     * 
     *
     * @param ProductImageDetail $thumbnail
     *
     * @return self
     */
    public function setThumbnail(ProductImageDetail $thumbnail): self
    {
        $this->initialized['thumbnail'] = true;
        $this->thumbnail = $thumbnail;
        return $this;
    }
}