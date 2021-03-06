<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReportClearingOrderCollection
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
     * @var ReportClearingOrder[]
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
     * 
     *
     * @return ReportClearingOrder[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ReportClearingOrder[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}