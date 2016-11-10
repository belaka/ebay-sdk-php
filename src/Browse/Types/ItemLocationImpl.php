<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Browse\Types;

/**
 *
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property \DTS\eBaySDK\Browse\Enums\CountryCodeEnum $country
 * @property string $county
 * @property string $postalCode
 * @property string $stateOrProvince
 */
class ItemLocationImpl extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'addressLine1' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'addressLine1'
        ],
        'addressLine2' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'addressLine2'
        ],
        'city' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'city'
        ],
        'country' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'country'
        ],
        'county' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'county'
        ],
        'postalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'postalCode'
        ],
        'stateOrProvince' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'stateOrProvince'
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
