<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReconsignmentCollection
{
    /**
     * 
     *
     * @var CollectionPagination
     */
    protected $pagination;
    /**
     * Class ReconsignmentResourceCollection
     *
     * @var Reconsignment[]
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
        $this->pagination = $pagination;
        return $this;
    }
    /**
     * Class ReconsignmentResourceCollection
     *
     * @return Reconsignment[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * Class ReconsignmentResourceCollection
     *
     * @param Reconsignment[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}