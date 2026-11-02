<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Order implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The shopCode used internally to distinguish between clients.
     *
     * @var string|null
     */
    public ?string $shopCode;
    /**
     * @var OrderCustomer
     */
    public OrderCustomer $customer;
    /**
     * Multiple orderItems with the same productNumber are allowed, but note that they will be merged
     * together if all orderItem data is the same.
     *
     * @var list<OrderItem>
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
     * Additional optional options for the order.
     *
     * @var BaseOrderOptions|null
     */
    public ?BaseOrderOptions $options;
    /**
     * The order number.\
     * Note: If this number is prefixed with 'NICE', it means that the order was created
     * manually by niceshops (see 'source').
     *
     * @var mixed
     */
    public $orderNumber;
    /**
     * The current status of the order.
     * - new: The order was created but not every required information was given.
     * The order can not be processed without manual intervention.
     * - processing: The order is being processed. For split deliveries, some of the shipments might have
     * already been transferred to the delivery agent.
     * - delivered: The orders shipments have all been transferred to the delivery agent (Note that the
     * update to this status might be delayed and not yet reflect the status of the linked deliveries).
     * - deleted: The order has been marked as deleted.
     * - canceled: The order has been canceled.
     * - locked: The order is locked. The order can not be processed without manual intervention.
     * - examination: The order has been manually locked. The order can not be processed without manual
     * intervention.
     * - redacted: The order has been redacted for GDPR reasons.
     *
     * @var string
     */
    public string $status;
    /**
     * Describes why the order is locked
     *
     * @var string|null
     */
    public ?string $lockReason;
    /**
     * The create date for the order. Format in ISO 8601
     *
     * @var \DateTime
     */
    public \DateTime $orderDate;
    /**
     * Note that only deliveries with status 'delivered' are shown in this list.
     *
     * @var list<OrderDelivery>|null
     */
    public ?array $delivery;
    /**
     * Options regarding the payment of the order
     *
     * @var OrderPayment
     */
    public OrderPayment $payment;
    /**
     * Options regarding the shipping of the order.
     *
     * @var OrderShipping
     */
    public OrderShipping $shipping;
    /**
     * The source of the order.
     * - shopify: This order was created via the steve by niceshops Shopify application
     * - nice: This order was created manually by niceshops
     * - api: This order was created via the Fulfillment API
     *
     * @var string
     */
    public string $source;
    /**
     * If available, a hyperlink to the application where this order was created is provided
     *
     * @var string|null
     */
    public ?string $sourceLink;
    /**
     * Indicates whether the order can be canceled or not
     *
     * @var bool
     */
    public bool $cancelable;
    /**
     * Indicates whether orderItems that are not delivered yet can be canceled or not
     *
     * @var bool
     */
    public bool $orderItemsCancelable;
    /**
     * Indicates whether the order can currently be updated via PATCH /order/{orderNumber}.
     * It is false as soon as the order is delivered, deleted, canceled or redacted,
     * and as soon as the order is being processed in the warehouse.
     *
     * @var bool
     */
    public bool $editable;
    /**
     * Indicates whether a partial delivery is pending or not.
     * Note: If true, it means that a partial delivery has been requested but not yet processed.
     * If false, it means that no partial delivery is currently pending.
     *
     * @var bool
     */
    public bool $partialDeliveryPending;
    public function definedProperties(): array
    {
        return ['shopCode' => 'shopCode', 'customer' => 'customer', 'orderItems' => 'orderItems', 'externalOrderId' => 'externalOrderId', 'deliverySlipNotes' => 'deliverySlipNotes', 'externalOrderReference' => 'externalOrderReference', 'orderNotes' => 'orderNotes', 'desiredShippingDate' => 'desiredShippingDate', 'amazonSellerOrderId' => 'amazonSellerOrderId', 'amazonVendorOrderId' => 'amazonVendorOrderId', 'amazonFbaShipmentId' => 'amazonFbaShipmentId', 'deliveryCosts' => 'deliveryCosts', 'options' => 'options', 'orderNumber' => 'orderNumber', 'status' => 'status', 'lockReason' => 'lockReason', 'orderDate' => 'orderDate', 'delivery' => 'delivery', 'payment' => 'payment', 'shipping' => 'shipping', 'source' => 'source', 'sourceLink' => 'sourceLink', 'cancelable' => 'cancelable', 'orderItemsCancelable' => 'orderItemsCancelable', 'editable' => 'editable', 'partialDeliveryPending' => 'partialDeliveryPending'];
    }
}