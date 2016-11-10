<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Account\Types;

/**
 *
 * @property \DTS\eBaySDK\Account\Enums\ShippingCostTypeEnum $costType
 * @property \DTS\eBaySDK\Account\Types\Amount $insuranceFee
 * @property boolean $insuranceOffered
 * @property \DTS\eBaySDK\Account\Enums\ShippingOptionTypeEnum $optionType
 * @property \DTS\eBaySDK\Account\Types\Amount $packageHandlingCost
 * @property \DTS\eBaySDK\Account\Types\ShippingService[] $shippingServices
 */
class ShippingOption extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'costType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'costType'
        ],
        'insuranceFee' => [
            'type' => 'DTS\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'insuranceFee'
        ],
        'insuranceOffered' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'insuranceOffered'
        ],
        'optionType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'optionType'
        ],
        'packageHandlingCost' => [
            'type' => 'DTS\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'packageHandlingCost'
        ],
        'shippingServices' => [
            'type' => 'DTS\eBaySDK\Account\Types\ShippingService',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingServices'
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
