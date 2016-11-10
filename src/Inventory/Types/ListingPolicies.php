<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Inventory\Types;

/**
 *
 * @property string $fulfillmentPolicyId
 * @property string $paymentPolicyId
 * @property string $returnPolicyId
 * @property \DTS\eBaySDK\Inventory\Types\ShippingCostOverride[] $shippingCostOverrides
 */
class ListingPolicies extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'fulfillmentPolicyId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fulfillmentPolicyId'
        ],
        'paymentPolicyId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentPolicyId'
        ],
        'returnPolicyId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPolicyId'
        ],
        'shippingCostOverrides' => [
            'type' => 'DTS\eBaySDK\Inventory\Types\ShippingCostOverride',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingCostOverrides'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
