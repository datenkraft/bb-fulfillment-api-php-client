<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class PackagingCollection extends \ArrayObject
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
     * @var CollectionPagination
     */
    protected $pagination;
    /**
     * Data of the collection
     *
     * @var list<Packaging>
     */
    protected $data;
    /**
     * @return CollectionPagination
     */
    public function getPagination(): CollectionPagination
    {
        return $this->pagination;
    }
    /**
     * @param CollectionPagination $pagination
     *
     * @return self
     */
    public function setPagination(CollectionPagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
    /**
     * Data of the collection
     *
     * @return list<Packaging>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * Data of the collection
     *
     * @param list<Packaging> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}