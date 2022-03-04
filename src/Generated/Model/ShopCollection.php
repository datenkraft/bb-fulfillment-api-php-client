<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ShopCollection
{
    /**
     * Class AbstractPaginatedResourceCollection
     *
     * @var CollectionPagination
     */
    protected $pagination;
    /**
     * 
     *
     * @var Shop[]
     */
    protected $data;
    /**
     * Class AbstractPaginatedResourceCollection
     *
     * @return CollectionPagination
     */
    public function getPagination() : CollectionPagination
    {
        return $this->pagination;
    }
    /**
     * Class AbstractPaginatedResourceCollection
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
     * @return Shop[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Shop[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}