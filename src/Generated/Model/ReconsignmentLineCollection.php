<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReconsignmentLineCollection extends \ArrayObject
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
     * 
     *
     * @var CollectionPagination
     */
    protected $pagination;
    /**
     * Class ReconsignmentLineResourceCollection
     *
     * @var ReconsignmentLine[]
     */
    protected $data;
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
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
    /**
     * Class ReconsignmentLineResourceCollection
     *
     * @return ReconsignmentLine[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * Class ReconsignmentLineResourceCollection
     *
     * @param ReconsignmentLine[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}