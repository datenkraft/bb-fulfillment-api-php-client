<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewOrderOptions
{
    /**
    * By setting this option, the order will be processed into the defined state.\
    This option is NOT available in the production systems.\
    The autoprocessing of the state happens after the order has been sucessfully created.
    In case of any errors during the autoprocessing of the state, error messages are shown but the order will still have been created and is not rolled back.
    
    Available states:
    - order_completed_single_delivery: The order is completely delivered within one shipment
    - order_completed_multiple_deliveries: The order is completely delivered and includes several shipments
    - order_partially_delivered: The order is in progress and one of several shipments is delivered
    - order_canceled: The order is canceled
    - order_locked: The order is locked
    
    *
    * @var string
    */
    protected $autoProcessState;
    /**
    * By setting this option, the order will be processed into the defined state.\
    This option is NOT available in the production systems.\
    The autoprocessing of the state happens after the order has been sucessfully created.
    In case of any errors during the autoprocessing of the state, error messages are shown but the order will still have been created and is not rolled back.
    
    Available states:
    - order_completed_single_delivery: The order is completely delivered within one shipment
    - order_completed_multiple_deliveries: The order is completely delivered and includes several shipments
    - order_partially_delivered: The order is in progress and one of several shipments is delivered
    - order_canceled: The order is canceled
    - order_locked: The order is locked
    
    *
    * @return string
    */
    public function getAutoProcessState() : string
    {
        return $this->autoProcessState;
    }
    /**
    * By setting this option, the order will be processed into the defined state.\
    This option is NOT available in the production systems.\
    The autoprocessing of the state happens after the order has been sucessfully created.
    In case of any errors during the autoprocessing of the state, error messages are shown but the order will still have been created and is not rolled back.
    
    Available states:
    - order_completed_single_delivery: The order is completely delivered within one shipment
    - order_completed_multiple_deliveries: The order is completely delivered and includes several shipments
    - order_partially_delivered: The order is in progress and one of several shipments is delivered
    - order_canceled: The order is canceled
    - order_locked: The order is locked
    
    *
    * @param string $autoProcessState
    *
    * @return self
    */
    public function setAutoProcessState(string $autoProcessState) : self
    {
        $this->autoProcessState = $autoProcessState;
        return $this;
    }
}