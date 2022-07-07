<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderCollection
{
    /**
     * 
     *
     * @var CollectionPagination
     */
    protected $pagination;
    /**
     * 
     *
     * @var mixed
     */
    protected $data;
    /**
     * 
     *
     * @var Order[]
     */
    protected $collection;
    /**
     * 
     *
     * @return CollectionPagination
     */
    public function getPagination() : CollectionPagination
    {
        return $this->pagination;
    }
    /**
     * 
     *
     * @param CollectionPagination $pagination
     *
     * @return self
     */
    public function setPagination(CollectionPagination $pagination) : self
    {
        $this->pagination = $pagination;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param mixed $data
     *
     * @return self
     */
    public function setData($data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return Order[]
     */
    public function getCollection() : array
    {
        return $this->collection;
    }
    /**
     * 
     *
     * @param Order[] $collection
     *
     * @return self
     */
    public function setCollection(array $collection) : self
    {
        $this->collection = $collection;
        return $this;
    }
}