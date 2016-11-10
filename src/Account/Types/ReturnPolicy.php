<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Account\Types;

/**
 *
 * @property \DTS\eBaySDK\Account\Types\CategoryType[] $categoryTypes
 * @property string $description
 * @property boolean $extendedHolidayReturnsOffered
 * @property \DTS\eBaySDK\Account\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property \DTS\eBaySDK\Account\Enums\RefundMethodEnum $refundMethod
 * @property string $restockingFeePercentage
 * @property string $returnInstructions
 * @property \DTS\eBaySDK\Account\Enums\ReturnMethodEnum $returnMethod
 * @property \DTS\eBaySDK\Account\Types\TimeDuration $returnPeriod
 * @property string $returnPolicyId
 * @property boolean $returnsAccepted
 * @property \DTS\eBaySDK\Account\Enums\ReturnShippingCostPayerEnum $returnShippingCostPayer
 */
class ReturnPolicy extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'categoryTypes' => [
            'type' => 'DTS\eBaySDK\Account\Types\CategoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryTypes'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'extendedHolidayReturnsOffered' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'extendedHolidayReturnsOffered'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'refundMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundMethod'
        ],
        'restockingFeePercentage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'restockingFeePercentage'
        ],
        'returnInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnInstructions'
        ],
        'returnMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnMethod'
        ],
        'returnPeriod' => [
            'type' => 'DTS\eBaySDK\Account\Types\TimeDuration',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPeriod'
        ],
        'returnPolicyId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPolicyId'
        ],
        'returnsAccepted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnsAccepted'
        ],
        'returnShippingCostPayer' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnShippingCostPayer'
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
