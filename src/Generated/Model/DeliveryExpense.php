<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class DeliveryExpense implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Code of the delivery service.
     *
     * @var string
     */
    public string $deliveryServiceCode;
    /**
     * the country code of your destination.
     *
     * @var string
     */
    public string $countryCode;
    /**
     * @var list<DeliveryExpensePrice>
     */
    public array $price;
    /**
     * The weight in gram.
     *
     * @var int
     */
    public int $weight;
    /**
     * The height in mm.
     *
     * @var int
     */
    public int $height;
    /**
     * The length in mm.
     *
     * @var int
     */
    public int $length;
    /**
     * The width in mm.
     *
     * @var int
     */
    public int $width;
    public function definedProperties(): array
    {
        return ['deliveryServiceCode' => 'deliveryServiceCode', 'countryCode' => 'countryCode', 'price' => 'price', 'weight' => 'weight', 'height' => 'height', 'length' => 'length', 'width' => 'width'];
    }
}