<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Inventory\Types;

/**
 *
 * @property string $format
 * @property string $limit
 * @property string $marketplace_id
 * @property string $offset
 * @property string $sku
 */
class GetOffersRestRequest extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'format' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'format'
        ],
        'limit' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'limit'
        ],
        'marketplace_id' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplace_id'
        ],
        'offset' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offset'
        ],
        'sku' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sku'
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
