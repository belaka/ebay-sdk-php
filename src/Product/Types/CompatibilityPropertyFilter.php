<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Product\Types;

/**
 *
 * @property \DTS\eBaySDK\Product\Types\PropertyValue[] $propertyFilter
 * @property string $AAIA
 * @property string $HSNTSN
 */
class CompatibilityPropertyFilter extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'propertyFilter' => [
            'type' => 'DTS\eBaySDK\Product\Types\PropertyValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'propertyFilter'
        ],
        'AAIA' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AAIA'
        ],
        'HSNTSN' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HSNTSN'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
