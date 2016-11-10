<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Inventory\Types;

/**
 *
 * @property string $inventoryItemGroupKey
 */
class CreateOrReplaceInventoryItemGroupRestRequest extends \DTS\eBaySDK\Inventory\Types\InventoryItemGroup
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'inventoryItemGroupKey' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryItemGroupKey'
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
