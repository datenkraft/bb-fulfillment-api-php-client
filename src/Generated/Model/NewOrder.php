<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewOrder implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The shopCode used internally to distinguish between clients.
     *
     * @var string|null
     */
    public ?string $shopCode;
    /**
     * @var NewOrderCustomer
     */
    public NewOrderCustomer $customer;
    /**
     * @var list<NewOrderItem>
     */
    public array $orderItems;
    /**
     * A not unique reference for the order which can be used for identifying a specific order or for
     * mapping to a third party app.
     *
     * @var string|null
     */
    public ?string $externalOrderId;
    /**
     * Notes to be printed on the delivery slip. If not provided, the shop meta.deliverySlipNotes value will be
     * used as a fallback.
     *
     * @var string|null
     */
    public ?string $deliverySlipNotes;
    /**
     * External reference for the order
     *
     * @var string|null
     */
    public ?string $externalOrderReference;
    /**
     * Notes for the steve team regarding the fulfillment. \
     * If `meta.orderNotesPrecedingText` is set in the `shop` resource, it will be prepended to the notes.
     *
     * @var string|null
     */
    public ?string $orderNotes;
    /**
     * The desired shipping date of the order. The order will not be shipped before this date.\
     * Must not be in the past.\
     * If not set, the order is shipped as soon as possible.\
     * Stock is reserved immediately regardless of this date.\
     * Can be updated via PATCH /order/{orderNumber} as long as the order is open.\
     * Note: while the desired shipping date is in the future, the order is reported with status 'locked'.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $desiredShippingDate;
    /**
     * The Amazon seller order id used when the order is coming from the Amazon marketplace.
     *
     * @var string|null
     */
    public ?string $amazonSellerOrderId;
    /**
     * The Amazon vendor order id when sending orders to an Amazon warehouse for sales by Amazon.
     *
     * @var string|null
     */
    public ?string $amazonVendorOrderId;
    /**
     * The Amazon seller shipment id when sending a delivery to an Amazon warehouse for fulfillment by Amazon.
     *
     * @var string|null
     */
    public ?string $amazonFbaShipmentId;
    /**
     * The delivery costs of the order, which will be charged to the customer.\
     * Note: This field is required if the delivery address country requires customs clearance
     * (see `customsClearanceRequired` on the `country` resource).
     *
     * @var list<OrderDeliveryCosts>|null
     */
    public ?array $deliveryCosts;
    /**
     * Additional optional options for a new order.
     *
     * @var NewOrderOptions|null
     */
    public ?NewOrderOptions $options;
    public function definedProperties(): array
    {
        return ['shopCode' => 'shopCode', 'customer' => 'customer', 'orderItems' => 'orderItems', 'externalOrderId' => 'externalOrderId', 'deliverySlipNotes' => 'deliverySlipNotes', 'externalOrderReference' => 'externalOrderReference', 'orderNotes' => 'orderNotes', 'desiredShippingDate' => 'desiredShippingDate', 'amazonSellerOrderId' => 'amazonSellerOrderId', 'amazonVendorOrderId' => 'amazonVendorOrderId', 'amazonFbaShipmentId' => 'amazonFbaShipmentId', 'deliveryCosts' => 'deliveryCosts', 'options' => 'options'];
    }
}