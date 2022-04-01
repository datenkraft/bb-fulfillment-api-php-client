<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class DeliveryCollection
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
     * @var Delivery[]
     */
    protected $data;
    /**
     * The page contained in this collection.
     *
     * @var int
     */
    protected $page;
    /**
     * The page size used for reading the collection.
     *
     * @var int
     */
    protected $pageSize;
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
     * @return Delivery[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Delivery[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * The page contained in this collection.
     *
     * @return int
     */
    public function getPage() : int
    {
        return $this->page;
    }
    /**
     * The page contained in this collection.
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page) : self
    {
        $this->page = $page;
        return $this;
    }
    /**
     * The page size used for reading the collection.
     *
     * @return int
     */
    public function getPageSize() : int
    {
        return $this->pageSize;
    }
    /**
     * The page size used for reading the collection.
     *
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize) : self
    {
        $this->pageSize = $pageSize;
        return $this;
    }
}